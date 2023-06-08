import 'package:flutter/material.dart';
import 'package:animated_splash_screen/animated_splash_screen.dart';
import 'package:Keneges/src/pages/my_home_page.dart';

class SplashScreen extends StatelessWidget {
  const SplashScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.blue[700],
      body: SingleChildScrollView(
        child: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            crossAxisAlignment: CrossAxisAlignment.center,
            children: [
              Center(
                child: Image.asset(
                  'assets/images/klogo.png',
                  height: 180,
                ),
              ),
              AnimatedSplashScreen(
                splash: Image.asset(
                  'assets/images/klogo.png',
                ),
                nextScreen: const MyHomePage(),
                splashTransition: SplashTransition.fadeTransition,
                backgroundColor: Colors.white,
                duration: 3000,
              ),
              const Text("Keneges.uz"),
            ],
          ),
        ),
      ),
    );
  }
}
