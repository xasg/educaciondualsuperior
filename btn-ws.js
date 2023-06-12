function toggleWhatsAppPopup() {
    var whatsappPopup = document.getElementById('whatsappPopup');
    whatsappPopup.classList.toggle('open');
  }

  function sendWhatsAppMessage() {
    var message = document.getElementById('whatsappMessage').value;
    var phoneNumber = '5551012306'; // Reemplaza con tu número de teléfono de WhatsApp

    var url = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(message);

    // Ventana emergente sin redirección 
    var popup = window.open(url, '_blank', 'width=400,height=600,scrollbars=yes,resizable=yes');
    popup.focus();
  }

  function clearWhatsAppMessage() {
    document.getElementById('whatsappMessage').value = '';
  }