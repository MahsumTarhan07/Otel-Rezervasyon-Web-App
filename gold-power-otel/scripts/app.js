    $(document).ready(function() {
      $('#oda').change(function() {
        var selectedOption = $('#oda').val();
        if (selectedOption == '1') {
          $('#fiyat').val('100');
        } else if (selectedOption == '2') {
          $('#fiyat').val('150');
        } else if (selectedOption == '3') {
          $('#fiyat').val('200');
        }
      });
    });