$('#formulario').submit(function(e) {
    e.preventDefault();

        const valorEmprestimo = parseFloat($('#valor-emp').val());
         const prazoMeses = parseInt($('#prazo-emp').val());
        const taxaJurosMensal = 0.065;

         const parcelaMensal = (valorEmprestimo * taxaJurosMensal) / (1 - Math.pow(1 + taxaJurosMensal, -prazoMeses));
            
        $('#pagamento').text(`Sua parcela mensal será de R$${parcelaMensal.toFixed(2)}`);
}); 