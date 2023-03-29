# Stripe Checkout process
 implementation of Stripe Checkout process with webhooks in consideration.

### End Points
| Resource       | Method | # Description                                                 |
|----------------|--------|---------------------------------------------------------------|
| /cart          | GET    | show the cart                                                 |
| /cart/checkout | POST   | create an order line and sent customer to proceed the payment |
| /cart/success  | GET    | display success page for customer                             |
| /cart/webhook  | POST   | listen for success and failure events during the checkout     |

