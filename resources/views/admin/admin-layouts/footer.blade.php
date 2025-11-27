<footer class="content-footer footer bg-footer-theme">
    <div class="container-fluid">
      <div
        class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column"
      >
        <div>
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          <a href="{{ route('dashboard') }}" class="fw-semibold">{{ setting()->name ?? appName() }}</a>
        </div>
      </div>
    </div>
</footer>
