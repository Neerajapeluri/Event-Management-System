<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <header>
        <h1>Frequently Asked Questions</h1>
    </header>
    <div class="container">
        <h2>Welcome to our FAQ Section</h2>

        <!-- User Login FAQ -->
        <h3>User Login FAQ</h3>
        <ul>
            <li>
                <a href="javascript:void(0)" class="faq-question">How do I log in to my account?</a>
                <div class="faq-answer">
                    To log in, follow these steps:
                    <ol>
                        <li>Click the "Log In" or "Sign In" button.</li>
                        <li>Enter your email and password.</li>
                        <li>Click "Log In."</li>
                    </ol>
                </div>
            </li>
            
        </ul>

        <!-- Venue Booking FAQ -->
        <h3>Venue Booking FAQ</h3>
        <ul>
            <li>
                <a href="javascript:void(0)" class="faq-question">How do I book a venue for an event?</a>
                <div class="faq-answer">
                    To book a venue, do the following:
                    <ol>
                        <li>Log in.</li>
                        <li>There you will see sections</li>
                        <li>Select the event type (e.g., social, leisure, corporate).</li>
                        <li>Choose a venue based on the address and booking date.</li>
                        <li>Submit a booking request and wait for confirmation.</li>
                    </ol>
                </div>
            </li>
        </ul>

        <!-- Photography Services FAQ -->
        <h3>Photography Services FAQ</h3>
        <ul>
            <li>
                <a href="javascript:void(0)" class="faq-question">How can I hire a photographer for my event?</a>
                <div class="faq-answer">
                    To hire a photographer, follow these steps:
                    <ol>
                        <li>Log in.</li>
                        <li>Visit the "Photography Services" section.</li>
                        <li>Browse available photographers.</li>
                        <li>Contact photographers to discuss details and pricing.</li>
                        <li>Book the photographer's services.</li>
                    </ol>
                </div>
            </li>
        </ul>

        <!-- Food Services FAQ -->
        <h3>Food Services FAQ</h3>
        <ul>
            <li>
                <a href="javascript:void(0)" class="faq-question">How can I order catering or food services for my event?</a>
                <div class="faq-answer">
                    To order food services, follow these steps:
                    <ol>
                        <li>Log in.</li>
                        <li>Go to the "Food Services" section.</li>
                        <li>Browse food service providers .</li>
                        <li>contact them to discuss details.</li>
                        <li>Confirm your order and make a payment.</li>
                    </ol>
                </div>
            </li>
        </ul>

        <!-- Giving Ratings FAQ -->
        <h3>Giving Ratings FAQ</h3>
        <ul>
            <li>
                <a href="javascript:void(0)" class="faq-question">How can I provide ratings and reviews?</a>
                <div class="faq-answer">
                    To give ratings and reviews, do the following:
                    <ol>
                        <li>Log in.</li>
                        <li>you will see a navbar.</li>
                        <li>Click  on ratings</li>
                        <li>Provide your feedback and submit your review.</li>
                    </ol>
                </div>
            </li>
            <li>
                <a href="javascript:void(0)" class="faq-question">What is a booking ID for giving ratings?</a>
                <div class="faq-answer">
                    To provide a rating, you need a booking ID associated with the service or product. You can find this ID in your booking confirmation.
                </div>
            </li>
        </ul>

        <!-- Payment Options FAQ -->
        <h3>Payment Options FAQ</h3>
        <ul>
            <li>
                <a href="javascript:void(0)" class="faq-question">What payment methods are accepted for bookings and services?</a>
                <div class="faq-answer">
                     We accept various payment methods, including:
                    <ul>
                        <li>UPI (Unified Payments Interface)</li>
                        <li>Debit cards</li>
                        <li>Credit cards</li>
                        <li>Internet banking</li>
                        <li>QR code payments</li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <script>
        // JavaScript to toggle FAQ answers
        const faqQuestions = document.querySelectorAll(".faq-question");
        faqQuestions.forEach((question) => {
            question.addEventListener("click", () => {
                const answer = question.nextElementElementSibling;
                answer.classList.toggle("show-answer");
            });
        });
    </script>
</body>
</html>
