<script>
  let password = prompt('hello, you ?', '')

  if (password !== 'tedxub2021' || !password) {
    location.href = '/forbidden-access'
  }
</script>