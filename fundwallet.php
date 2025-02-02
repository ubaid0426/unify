<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fund Wallet</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
            color: #1a1a1a;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }

        .wallet-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            margin-bottom: 24px;
        }

        .wallet-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #eee;
        }

        .wallet-balance {
            font-size: 2rem;
            font-weight: 700;
            color: #0066cc;
        }

        .account-details {
            background: #f8fafc;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 24px;
        }

        .account-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .account-label {
            color: #666;
            font-size: 0.9rem;
        }

        .account-value {
            font-weight: 600;
            font-family: monospace;
        }

        .copy-btn {
            background: #e0e7ff;
            color: #3b82f6;
            border: none;
            padding: 4px 8px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8rem;
            margin-left: 8px;
        }

        .copy-btn:hover {
            background: #c7d2fe;
        }

        .funding-form {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
        }

        .submit-btn {
            background: #0066cc;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            width: 100%;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: #0052a3;
        }

        .transaction-history {
            margin-top: 24px;
        }

        .transaction-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .transaction-details {
            flex-grow: 1;
        }

        .transaction-amount {
            font-weight: 600;
        }

        .transaction-date {
            font-size: 0.8rem;
            color: #666;
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-success {
            background: #dcfce7;
            color: #166534;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="wallet-card">
            <div class="wallet-header">
                <h2>Wallet Balance</h2>
                <div class="wallet-balance">₦0.00</div>
            </div>

            <div class="account-details">
                <h3>Account Details</h3>
                <div class="account-row">
                    <span class="account-label">Bank Name</span>
                    <span class="account-value">WalletBank</span>
                </div>
                <div class="account-row">
                    <span class="account-label">Account Number</span>
                    <div>
                        <span class="account-value">1234567890</span>
                        <button class="copy-btn" onclick="copyToClipboard('1234567890')">Copy</button>
                    </div>
                </div>
                <div class="account-row">
                    <span class="account-label">Account Name</span>
                    <span class="account-value">JOHN DOE</span>
                </div>
            </div>

            <div class="funding-form">
                <h3>Manual Funding</h3>
                <form id="fundWalletForm">
                    <div class="form-group">
                        <label for="amount">Amount (₦)</label>
                        <input type="number" id="amount" name="amount" min="100" step="100" required>
                    </div>
                    <div class="form-group">
                        <label for="reference">Payment Reference</label>
                        <input type="text" id="reference" name="reference" required>
                    </div>
                    <button type="submit" class="submit-btn">Confirm Payment</button>
                </form>
            </div>

            <div class="transaction-history">
                <h3>Recent Transactions</h3>
                <div class="transaction-item">
                    <div class="transaction-details">
                        <div>Wallet Funding</div>
                        <div class="transaction-date">Jan 15, 2024 10:30 AM</div>
                    </div>
                    <div class="transaction-amount">+₦5,000.00</div>
                    <span class="status-badge status-success">Completed</span>
                </div>
                <div class="transaction-item">
                    <div class="transaction-details">
                        <div>Wallet Funding</div>
                        <div class="transaction-date">Jan 15, 2024 09:15 AM</div>
                    </div>
                    <div class="transaction-amount">+₦2,000.00</div>
                    <span class="status-badge status-pending">Pending</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text)
                .then(() => {
                    const button = event.target;
                    const originalText = button.textContent;
                    button.textContent = 'Copied!';
                    setTimeout(() => {
                        button.textContent = originalText;
                    }, 2000);
                })
                .catch(err => {
                    console.error('Failed to copy text: ', err);
                });
        }

        document.getElementById('fundWalletForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const amount = document.getElementById('amount').value;
            const reference = document.getElementById('reference').value;
            
            // Here you would typically make an API call to your backend
            console.log('Processing payment:', {
                amount: amount,
                reference: reference
            });

            // Simulate API response
            alert('Payment confirmation submitted successfully!');
            this.reset();
        });
    </script>
</body>
</html>