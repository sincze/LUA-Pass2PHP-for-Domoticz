<?php
if($status=="On"){
	if(apcu_fetch('skeuken')=='Off'&&apcu_fetch('swasbak')=='Off'&&apcu_fetch('swerkblad')=='Off'&&apcu_fetch('skookplaat')=='Off'&&apcu_fetch('zon')<1500){
		sw('wasbak','On');
		apcu_store('twasbak',time);
	}
	if((apcu_fetch('sweg')=='On'||apcu_fetch('sslapen')=='On')&&apcu_fetch('smeldingen')=='On'&&apcu_fetch('tweg')<time-178&&apcu_fetch('tslapen')<time-178){
		sw('sirene','On');
		telegram('Beweging keuken om '.strftime("%k:%M:%S",time),false,3);
	}
}
