# qrCoupons
This project implements a QR coupon system that includes generation, scanning, and management functionalities. It is designed to facilitate the creation, distribution, and tracking of QR-based coupons, suitable for various promotional campaigns or user engagement scenarios.



Key Features:
QR Code Generation: Randomly generates unique QR codes.

Database Integration: Stores generated QR codes along with their creation date and redemption status in a MySQL database.

QR Code Scanning: Provides both mobile and desktop versions of a QR code scanner using webcam integration. Scans QR codes and updates their redemption status in real-time.


Coupon Management: Allows users to view all generated QR codes and their current redemption status.

Statistics: Displays statistical insights into redeemed and unredeemed QR codes, providing a comprehensive overview of coupon usage.

Technologies Used:

Backend: PHP for server-side scripting and MySQL for database management.
Frontend: HTML, CSS, JavaScript for user interfaces.

Webcam Integration: Utilizes browser APIs for webcam access.

Data Visualization: Charts and graphs for visual representation of coupon usage statistics.

Usage:
Generating QR Codes: Use the QR code generator page to create new coupons.
Redeeming Coupons: Scan generated QR codes using the webcam scanner to mark them as redeemed.
Viewing Data: Access the management page to view all coupons and their current status.
Analytics: Check the statistics page for insights into coupon usage patterns.
This project serves as a practical tool for managing QR-based promotional campaigns, providing ease of use and insightful data analytics.
