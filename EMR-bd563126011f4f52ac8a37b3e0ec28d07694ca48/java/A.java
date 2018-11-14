class A{
	public static void main(String args[]){

	}	

	public static double G1(int units){
		double charge;

		double unitPriceBelow300=18.30;
		double unitPriceAbove300=22.85;

		double fixedRateBelow300=240;		
		double fixedRateAbove300=240;		

		if(0<= units & units<=300){
			charge=(units*unitPriceBelow300)+fixedRateBelow300;
		}else if(units>300){
			charge=(units*unitPriceAbove300)+fixedRateAbove300;
		}else{
			charge=(-1.00);
		}

		return charge;
	}

	public static double G2(int units){
		return (-1.00);
	}

	public static double G3(int units){
		return (-1.00);
	}

	public static double D1(int units,int dates){
		double charge;
		double date_ratio=1.00;
		//if the reading was taken more than 30 days that ratio is applied.
		if(dates>30){
			date_ratio=(dates/30);
		}

		if(0<=units & units<=60){
			double unitPriceBelow30=2.50;
			double unitPriceAbove30=4.80;

			double fixedRateBelow30=30;		
			double fixedRateAbove30=60;

			if(0<=units & units<=30){
				charge=(units*unitPriceBelow30)+fixedRateBelow30;
			}else if(units>30){
				charge=(units*unitPriceAbove30)+fixedRateAbove30;
			}

		}else if(units>60){
			double fixedRateBelow180=480;		
			double fixedRateAbove180=540;

			if(units<=180){
				curUnits=units-180;
				if(curUnits>=0){							
					chargeAbove180=curUnits*45.00;
				}

				curUnits-=30;
				if(curUnits>=0){							
					charge120to150=curUnits*32.00;
				}

				curUnits-=60;
				if(curUnits>=0){							
					charge90to120=curUnits*27.75;
				}

				curUnits-=60;
				if(curUnits>=0){							
					charge60to90=curUnits*10.00;
				}

				//charge between 0 to 60 units
				if(curUnits>=0){							
					charge0to60=curUnits*7.85;
				}
			}else{

			}
		}else{
			charge=(-1);
		}
	}


}