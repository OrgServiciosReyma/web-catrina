@php
    use GuzzleHttp\Client;

    $client = new Client();

    $popup_response = $client->request('GET', 'http://127.0.0.1:8000/api/popups/company/2');
    $popup = json_decode($popup_response->getBody(), true);
@endphp

@if(!empty($popup))
<div class="modal fade wk-popup-modal" id="wkPopupModal" tabindex="-1" aria-labelledby="wkPopupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
        <div class="modal-body">
            @if($popup[0]['image'] == NULL)
                
            @else
            <div class="wk-modal-image">
                <img src="http://127.0.0.1:8000/img/popups/{{ $popup[0]['image']  }}" alt="">
            </div>
            @endif
        
            <div class="wk-info-wrap">
                <h3>{{ $popup[0]['title'] }}</h3>
                @if($popup[0]['subtitle'] != NULL)
                <h5>{{ $popup[0]['subtitle'] }}</h5>
                @endif

                <p>{{ $popup[0]['text'] }}</p>

                @if($popup[0]['has_button'] == true)
                <a href="{{ $popup[0]['link'] }}" class="btn btn-primary mt-4">{{ $popup[0]['text_button'] }}</a>
                @endif
            </div>
        </div>
    </div>
</div>
</div>

  @push('scripts')
    @if($popup[0]['show_on_enter'] == true)
    <script type="text/javascript">
      if (document.cookie.indexOf('modal=modal_shown') >= 0) {

      }else {
        var wkPopupModal = new bootstrap.Modal(document.getElementById('wkPopupModal'), {
          keyboard: false
        });

        wkPopupModal.show();
        document.cookie = ('modal=modal_shown');
      }
    </script>
    @endif

    @if($popup[0]['show_on_exit'] == true)
    <script type="text/javascript">
      if (document.cookie.indexOf('modal=modal_shown') >= 0) {

      }else{
        $("html").bind("mouseleave", function () {
          var wkPopupModal = new bootstrap.Modal(document.getElementById('wkPopupModal'), {
            keyboard: false
          });

          wkPopupModal.show();
          $("html").unbind("mouseleave");
        });

        document.cookie = ('modal=modal_shown');
      }
    </script>
    @endif
  @endpush
@endif