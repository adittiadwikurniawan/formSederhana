<div style="font-family: Arial, sans-serif; max-width: none; margin: auto; padding: 20px;">
    <h2>Form Input User</h2>
    
    <form action="index.php" method="POST">
        <div style="margin-bottom: 10px;">
            <label>Firstname</label><br>
            <input type="text" name="firstname" required style="width: 100%; padding: 8px;">
        </div>
        
        <div style="margin-bottom: 10px;">
            <label>Lastname</label><br>
            <input type="text" name="lastname" required style="width: 100%; padding: 8px;">
        </div>
        
        <div style="margin-bottom: 10px;">
            <label>Phone Number</label><br>
            <input type="text" name="phone" required style="width: 100%; padding: 8px;">
        </div>
        <div style="margin-bottom: 10px;">
            <label>Address</label><br>
            <input type="text" name="address" required style="width: 100%; padding: 8px;">
        </div>
        <button type="submit" style="padding: 10px 15px; background: #4a90e2; color: white; border: none; cursor: pointer; text-align: center; margin-right: 8px;">
            Submit
        </button>
        <button type="button" id="resetBtn" style="padding: 10px 15px; background: #d9534f; color: white; border: none; cursor: pointer; text-align: center;">
            Reset
        </button>
    </form>

    <script>
        document.getElementById('resetBtn').addEventListener('click', function() {
            document.querySelector('form').reset();
            var tampil = document.getElementById('dataTampil');
            if (tampil) {
                tampil.style.display = 'none';
            }
        });
    </script>

    <hr style="margin: 30px 0;">

    <?php if ($dataTampil != null): ?>
        <div id="dataTampil" style="background: #e9f5ff; padding: 15px; border-left: 5px solid #4a90e2;">
            <h3>Data Berhasil Diinput:</h3>
            <p><strong>Firstname:</strong> <?php echo htmlspecialchars($dataTampil['firstname']); ?></p>
            <p><strong>Lastname:</strong> <?php echo htmlspecialchars($dataTampil['lastname']); ?></p>
            <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($dataTampil['phone']); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($dataTampil['address']); ?></p>
        </div>
    <?php endif; ?>
    
</div>