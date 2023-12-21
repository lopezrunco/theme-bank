document.querySelector('#form').addEventListener('submit', handleSubmit)
const sentAlert =  document.querySelector('#sended-msj-alert')

async function handleSubmit(event) {
    event.preventDefault()
    const form = new FormData(this)
    const response = await fetch(this.action, {
        method: this.method,
        body: form,
        headers: {
            'Accept': 'application/json'
        }
    })

    if (response.ok) {
        this.reset()
        sentAlert.style.display = 'flex'
    }
}