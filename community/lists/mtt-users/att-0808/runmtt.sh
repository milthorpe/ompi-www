#!/bin/bash
export OMPI_MCA_rmaps_schedule_policy=node
#module load ompi-1.8
cd /home/common/mtt
./client/mtt --file bend-local.ini --verbose
#module unload ompi-1.8
#module load ompi-svn
#cd /home/common/mtt
#./client/mtt --file bend-local.ini --verbose
#module unload ompi-svn

