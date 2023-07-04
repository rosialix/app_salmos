$(function() {
    $('#selec_cap li').on('click', onSelectcapitulo);

  });

  function onSelectcapitulo() {
    var capitulo_id = $(this).attr('id');
      // AJAX
      $('#list-item-1').html('Capitulo '+capitulo_id);
      $.get('/api/capitulo/'+capitulo_id, function (data) {
           var html_div = '';

          $.each(data, function (index, versiculo) {
            html_div += '<div class="ms-2 me-auto"><span class="fs-5">'+versiculo.num_versiculo+'</span> '+versiculo.texto+'</div>';
            // console.log('¡Hola :'+versiculo);
          });

          $('#lectura-versiculo').html(html_div);
      });
  }

