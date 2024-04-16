<section class="scroll-text scroll-left d-flex">
    <h1 class="mb-0 me-4">Toda una experiencia del auténtico lujo mexicano.</h1>
    <h1 class="mb-0">Toda una experiencia del auténtico lujo mexicano.</h1>
</section>

@push('scripts')
<script>
    ScrollTrigger.matchMedia({
      "(min-width: 960px)": function() {
        gsap.to(".scroll-left", {
          scrollTrigger: {
            trigger: ".scroll-left",
            scrub:true,
            start: "top 100%",
            end:"+=1500",
          },
          x: -600,
          ease: "power1"
        });
      },
    });
</script>
@endpush