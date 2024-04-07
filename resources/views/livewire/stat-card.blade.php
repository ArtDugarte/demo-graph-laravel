  <div class="card border-0">
      <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title fw-bolder fs-2">{{ $value }}</h5>
              <span class="badge fw-bold mb-1" style="color: {{ $color }};">{{ $quantity }}</span>
          </div>

          <a href={{ $url }} id="url"
              class="card-text text-muted fw-bold text-decoration-none link-success"
              style="font-size: clamp(0.5rem, 1.5vw, 0.9rem);">
              <i class="fa-solid fa-{{ $icon }}"></i>
              {{ $title }}
          </a>
      </div>
  </div>
