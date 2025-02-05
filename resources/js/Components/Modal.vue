<script setup>
defineProps({
    title: {
        type: String,
        required: true
    }
})

</script>

<template>
     <div class="modal fade" tabindex="-1"
            aria-labelledby="new-question-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="new-question-modal-label">{{ title }}</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <slot />
                </div>
                <div class="modal-footer" v-if="$slots.footer">
                 <slot name="footer" />
                </div>
              </div>
            </div>
          </div> 
</template>