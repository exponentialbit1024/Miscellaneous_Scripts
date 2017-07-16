import sys

def main():
	eP = float(raw_input("Enter your entry price : "))
	sellBuy = raw_input("Enter s/b for sell/buy order : ")
	tp = float(raw_input("Enter take profit : "))
	balance = float(raw_input("Enter acc balance : "))

	if sellBuy == 's':
		diffProf = round(eP - tp, 4)
		pipMov = diffProf * 10000
		X = pipMov / 3
		sLpip = round(float(X/10000),4)
		sL = eP + sLpip		
		lotSize = (0.01 * balance) / (X * 10)
		print("Stop Loss : " + str(sL))
		print("Lot Size : " + str(lotSize))
	elif sellBuy == 'b':
		diffProf = round(tp - eP, 4)
		pipMov = diffProf * 10000
		X = pipMov / 3
		sLpip = round(float(X/10000),4)
		sL = eP - sLpip
		lotSize = (0.01 * balance) / (X * 10)
		print("Stop Loss : " + str(sL))
		print("Lot Size : " + str(lotSize))
	else:
		raise Exception('Invalid order type option')


if __name__ == '__main__':
	try:
		while True:
			main()
			exitQ = raw_input("Exit? (y/n)")
			if exitQ == 'y':
				break
	except:
		print "Some error happened"
		sys.exit(-1)
