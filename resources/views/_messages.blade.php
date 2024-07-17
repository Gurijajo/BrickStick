    <style>
.popup {
    height: auto;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #28a745; 
    color: white;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); 
    z-index: 1000;
    max-width: 90%; 
}


.popup .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: transparent;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    outline: none; 
}
    </style>

    @if(!empty(session('success')))
        <div class="popup" id="successPopup">
            <h2>Thank You!</h2>
            {{ session('success') }}
            <button class="close-btn" id="closePopupBtn">&times;</button>
        </div>
    @endif

    <script>
        function showPopup() {
    var popup = document.getElementById('successPopup');
    if (popup) {
        popup.style.display = 'block';
        setTimeout(() => {closePopup()}, 3000);
    }
}


function closePopup() {
    var popup = document.getElementById('successPopup');
    if (popup) {
        popup.style.display = 'none';
    }
}

document.getElementById('closePopupBtn') && document.getElementById('closePopupBtn').addEventListener('click', () => {closePopup()});


window.onload = showPopup;
    </script>


