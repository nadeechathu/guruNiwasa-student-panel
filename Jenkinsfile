pipeline {
    agent any

    environment {
        SSH_PRIVATE_KEY = credentials('GEEKMAC')  // Assume you have stored your SSH private key in Jenkins credentials with the ID 'GEEKMAC'
    }

    stages {
        stage('Checkout code') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/main']], userRemoteConfigs: [[url: 'https://github.com/Geek-Mac-Solutions/guruNiwasa-student-panel.git']]])  // Change URL to your repo
            }
        }

        stage('Install SSH key') {
            steps {
                script {
                    // Write the SSH key to a file
                    writeFile file: 'id_rsa', text: SSH_PRIVATE_KEY
                    // Change permissions of the key file
                    sh 'chmod 600 id_rsa'
                    // Start the SSH agent and add the key
                    sh 'eval $(ssh-agent -s) && ssh-add id_rsa'
                }
            }
        }

        stage('Deploy website via SSH') {
            steps {
                script {
                    // Deploy files via scp and create timestamp file via ssh
                    sh '''
                        scp -o StrictHostKeyChecking=no -r ./* root@52.221.10.55:/www/wwwroot/geekmac.work.gd
                        ssh -o StrictHostKeyChecking=no root@52.221.10.55 "touch /www/wwwroot/geekmac.work.gd/$(date +\"%Y-%m-%d_%H-%M-%S\").txt"
                    '''
                }
            }
        }
    }

    post {
        cleanup {
            // Remove the SSH key file
            sh 'rm -f id_rsa'
        }
    }
}
