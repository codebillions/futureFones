require 'sinatra'
require 'stripe'
# This is your test secret API key.
Stripe.api_key = 'sk_test_51MGABfLRnlpRQuny26OjWBweCMCV8nkiA3uJrLrP6GNnmr93L66C4gnNj5jqQpGd76fP7GR6NZ17c2TObBOjENNr00Oq9MaQpv'

set :static, true
set :port, 4242

def calculate_order_amount(_items)
  # Replace this constant with a calculation of the order's amount
  # Calculate the order total on the server to prevent
  # people from directly manipulating the amount on the client
  1400
end

# An endpoint to start the payment process
post '/create-payment-intent' do
  content_type 'application/json'
  data = JSON.parse(request.body.read)

  # Create a PaymentIntent with amount and currency
  payment_intent = Stripe::PaymentIntent.create(
    amount: calculate_order_amount(data['items']),
    currency: 'usd'
  )

  {
    clientSecret: payment_intent['client_secret'],
  }.to_json
end

