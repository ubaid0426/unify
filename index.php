<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #ff7a00; /* Orange */
            --secondary-color: #ff7a00;); /* Red */
            --hover-color: #ff4500; /* Bright Red */
            --text-color: #ffffff; /* White */
            --background-color: #fff7e6; /* Light Beige */
        }
        .network-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        body {
            background-color: var(--background-color);
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg" style="background-color: var(--text-color);">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <span class="text-2xl font-bold" style="color: var(--primary-color);">Verify with confidence</span>
                </div>
                <div class="flex space-x-4">
                 <a href="login.php" style="background-color: var(--primary-color); color: var(--text-color);" class="px-4 py-2 rounded-lg hover:bg-opacity-80">Login</a>
                 <a href="register.php" style="background-color: var(--primary-color); color: var(--text-color);" class="px-4 py-2 rounded-lg hover:bg-opacity-80">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div style="background-color: var(--secondary-color); color: var(--text-color);" class="py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Verify Your Identity and Buy Data Bundles Instantly</h1>
            <p class="text-xl mb-8">Fast, Reliable, and Affordable Data Plans for All Networks</p>
           <a href="register.php"> <button style="background-color: var(--text-color); color: var(--secondary-color);" class="px-8 py-3 rounded-lg font-bold hover:bg-gray-100">
            Get Started
        </button></a>
        </div>
    </div>


  <!-- Network Selection -->
  <div class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Choose Your Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
    
        <!-- NIN SERVICES -->
        <div class="network-card bg-white p-6 rounded-lg shadow-md text-center cursor-pointer">
            <div class="w-20 h-20 bg-white-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                <img src="NIN2.png" alt="Search icon" width="80" height="80">
            </div>
            <h3 class="text-xl font-bold mb-2">NIN SERVICES</h3>
            <p class="text-gray-600 mb-4">Starting from ₦130</p>
            <ul class="features">         
            <li>Instant Search Results</li>
             <li>Comprehensive NIN Data</li>
            <li>24/7 Availability</li>
             <li>Real-time Data</li>
             <li>Multiple Search Options</li>
             <li>Quick Validation Process</li>
             <li>Accuracy Guaranteed</li>
             <li>Secure Access</li>
    </ul>
            <button class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700">
                  Choose Verification Type
            </button>
        </div>

        <!-- BVN SERVICES -->
        <div class="network-card bg-white p-6 rounded-lg shadow-md text-center cursor-pointer">
            <div class="w-20 h-20 bg-red-400 rounded-full mx-auto mb-4 flex items-center justify-center">
                <img src="BVN2.jpeg" alt="BVN Verification" width="90" height="70">
            </div>
            <h3 class="text-xl font-bold mb-2">BVN SERVICES</h3>
            <p class="text-gray-600 mb-4">Starting from ₦150</p>
            <ul class="features">         
                <li>Instant Search Results</li>
                 <li>Comprehensive BVN Data</li>
                <li>24/7 Availability</li>
                 <li>Real-time Data</li>
                 <li>Multiple Search Options</li>
                 <li>Quick Validation Process</li>
                 <li>Accuracy Guaranteed</li>
                 <li>Secure Access</li>
            <button class="w-full bg-red-400 text-white py-2 rounded-lg hover:bg-red-700">
                Choose Verification Type
            </button>
        </div>
        
         <!-- BUY DATA -->
        <div class="network-card bg-white p-6 rounded-lg shadow-md text-center cursor-pointer">
            <div class="w-20 h-20 bg-white-400 rounded-full mx-auto mb-4 flex items-center justify-center">
                <img src="signal.jpeg" alt="BVN Verification" width="100" height="80">
            </div>
            <h3 class="text-xl font-bold mb-2">BUY DATA</h3>
            <p class="text-gray-600 mb-4">Starting from ₦250</p>
            <ul class="features">         
                <li>Instant transactions Results</li>
                <li>Comprehensive Data Plans</li>
                <li>24/7 Availability</li>
                <li>Real-time Activation</li>
                <li>Multiple Plan Options</li>
                <li>Quick Purchase Process</li>
                <li>Reliable Connection Guaranteed</li>
                <li>Secure Payment Access</li>

            <button class="w-full bg-yellow-400 text-white py-2 rounded-lg hover:bg-yellow-500">
                Select Plan
            </button>
        </div>
        
        <!-- Service Card 1 -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="mb-4 text-red-600">
                    <i data-feather="tv" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Cable TV</h4>
                <p class="text-gray-600">Subscribe to GoTV, Startimes and more with instant activation.</p>
            </div>
            
                  
        <!-- Service Card 4 -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="mb-4 text-blue-600">
                    <i data-feather="phone" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Airtime & Data</h4>
                <p class="text-gray-600">Purchase airtime and data bundles at discounted rates.</p>
            </div>

        <!-- Service Card 3 -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="mb-4 text-red-600">
                    <i data-feather="credit-card" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Data Card</h4>
                <p class="text-gray-600">Print and share data cards with family and friends.</p>
            </div>


        <!-- Service Card 2 -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="mb-4 text-red-600">
                    <i data-feather="zap" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Electricity</h4>
                <p class="text-gray-600">Pay your electricity bills easily - both prepaid and postpaid.</p>
            </div>
            </button>
        </div>
    </div>
</div>

 </header>
<!-- Features Grid -->
<section class="container mx-auto px-6 py-16">
    <h3 class="text-3xl font-bold text-center mb-12">Key Features</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Feature Card 1 -->
        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="mb-4 text-red-600">
                <i data-feather="shield" class="w-8 h-8"></i>
            </div>
            <h4 class="text-xl font-semibold mb-2">Privacy Protected</h4>
            <p class="text-gray-600">Your data is secure with our advanced encryption and security measures.</p>
        </div>

        <!-- Feature Card 2 -->
        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="mb-4 text-red-600">
                <i data-feather="star" class="w-8 h-8"></i>
            </div>
            <h4 class="text-xl font-semibold mb-2">Discount Always</h4>
            <p class="text-gray-600">Enjoy continuous discounts on all our services and products.</p>
        </div>

        <!-- Feature Card 3 -->
        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="mb-4 text-blue-600">
                <i data-feather="users" class="w-8 h-8"></i>
            </div>
            <h4 class="text-xl font-semibold mb-2">User Friendly</h4>
            <p class="text-gray-600">Easy to use interface designed for the best user experience.</p>
        </div>
    </div>
</section>

         <!-- Stats Section -->
            <section class="container mx-auto px-6 py-16">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <!-- Stat 1 -->
                    <div>
                        <div class="text-4xl font-bold text-red-600 mb-2">357+</div>
                        <div class="text-red-600">App Downloads</div>
                    </div>

        <!-- Stat 2 -->
        <div>
            <div class="text-4xl font-bold text-red-600 mb-2">1,000+</div>
            <div class="text-red-600">Total Reviews</div>
        </div>

        <!-- Stat 3 -->
        <div>
            <div class="text-4xl font-bold text-red-600 mb-2">3,000+</div>
            <div class="text-red-600">Daily Visits</div>
        </div>

        <!-- Stat 4 -->
        <div>
            <div class="text-4xl font-bold text-red-600 mb-2">1,500+</div>
            <div class="text-red-600">Active Users</div>
        </div>
    </div>
</section>

                
<!-- Features Section -->
<div class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Why Choose Us?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-red-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Instant Delivery</h3>
                <p class="text-gray-600">Get your data bundle within seconds of purchase</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-red-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Secure Payment</h3>
                <p class="text-gray-600">Your transactions are 100% secure with us</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-red-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">24/7 Support</h3>
                <p class="text-gray-600">Our customer support team is always available</p>
            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer style="background-color: var(--secondary-color);" class="text-white py-8">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Footer content remains the same -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 UnifiedTech. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>