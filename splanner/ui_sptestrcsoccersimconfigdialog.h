/********************************************************************************
** Form generated from reading UI file 'sptestrcsoccersimconfigdialog.ui'
**
** Created by: Qt User Interface Compiler version 4.8.7
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_SPTESTRCSOCCERSIMCONFIGDIALOG_H
#define UI_SPTESTRCSOCCERSIMCONFIGDIALOG_H

#include <QtCore/QVariant>
#include <QtGui/QAction>
#include <QtGui/QApplication>
#include <QtGui/QButtonGroup>
#include <QtGui/QDialog>
#include <QtGui/QGridLayout>
#include <QtGui/QGroupBox>
#include <QtGui/QHeaderView>
#include <QtGui/QLabel>
#include <QtGui/QLineEdit>
#include <QtGui/QPushButton>

QT_BEGIN_NAMESPACE

class Ui_SpTestRCSoccerSimConfigDialog
{
public:
    QGridLayout *gridLayout;
    QGroupBox *groupBox_2;
    QGridLayout *gridLayout_3;
    QLabel *label_4;
    QLineEdit *teamScriptPathLine;
    QPushButton *teamScriptButton;
    QLineEdit *teamSetPlayFilePathLine;
    QPushButton *teamSetPlayFileButton;
    QLineEdit *teamDirectoryPathLine;
    QLabel *label_3;
    QPushButton *teamDirectoryButton;
    QLabel *label_5;
    QGroupBox *groupBox_3;
    QGridLayout *gridLayout_4;
    QLabel *label;
    QLineEdit *logFilesDirectoryPathLine;
    QPushButton *logFilesDirectoryButton;
    QLabel *label_2;
    QLineEdit *simulatorExecutablePathLine;
    QPushButton *simulatorExecutableButton;
    QGroupBox *opponentGroup;
    QGridLayout *gridLayout_2;
    QLineEdit *opponentScriptPathLine;
    QLabel *label_9;
    QPushButton *opponentScriptButton;
    QLabel *label_6;
    QLineEdit *opponentDirectoryPathLine;
    QPushButton *opponentDirectoryButton;
    QPushButton *cancelButton;
    QPushButton *resetButton;
    QPushButton *testButton;

    void setupUi(QDialog *SpTestRCSoccerSimConfigDialog)
    {
        if (SpTestRCSoccerSimConfigDialog->objectName().isEmpty())
            SpTestRCSoccerSimConfigDialog->setObjectName(QString::fromUtf8("SpTestRCSoccerSimConfigDialog"));
        SpTestRCSoccerSimConfigDialog->setWindowModality(Qt::ApplicationModal);
        SpTestRCSoccerSimConfigDialog->resize(792, 384);
        SpTestRCSoccerSimConfigDialog->setMinimumSize(QSize(792, 384));
        SpTestRCSoccerSimConfigDialog->setMaximumSize(QSize(792, 384));
        gridLayout = new QGridLayout(SpTestRCSoccerSimConfigDialog);
        gridLayout->setObjectName(QString::fromUtf8("gridLayout"));
        groupBox_2 = new QGroupBox(SpTestRCSoccerSimConfigDialog);
        groupBox_2->setObjectName(QString::fromUtf8("groupBox_2"));
        QSizePolicy sizePolicy(QSizePolicy::Minimum, QSizePolicy::Minimum);
        sizePolicy.setHorizontalStretch(0);
        sizePolicy.setVerticalStretch(0);
        sizePolicy.setHeightForWidth(groupBox_2->sizePolicy().hasHeightForWidth());
        groupBox_2->setSizePolicy(sizePolicy);
        gridLayout_3 = new QGridLayout(groupBox_2);
        gridLayout_3->setObjectName(QString::fromUtf8("gridLayout_3"));
        label_4 = new QLabel(groupBox_2);
        label_4->setObjectName(QString::fromUtf8("label_4"));

        gridLayout_3->addWidget(label_4, 3, 0, 1, 1);

        teamScriptPathLine = new QLineEdit(groupBox_2);
        teamScriptPathLine->setObjectName(QString::fromUtf8("teamScriptPathLine"));

        gridLayout_3->addWidget(teamScriptPathLine, 3, 1, 1, 1);

        teamScriptButton = new QPushButton(groupBox_2);
        teamScriptButton->setObjectName(QString::fromUtf8("teamScriptButton"));

        gridLayout_3->addWidget(teamScriptButton, 3, 2, 1, 1);

        teamSetPlayFilePathLine = new QLineEdit(groupBox_2);
        teamSetPlayFilePathLine->setObjectName(QString::fromUtf8("teamSetPlayFilePathLine"));

        gridLayout_3->addWidget(teamSetPlayFilePathLine, 6, 1, 1, 1);

        teamSetPlayFileButton = new QPushButton(groupBox_2);
        teamSetPlayFileButton->setObjectName(QString::fromUtf8("teamSetPlayFileButton"));

        gridLayout_3->addWidget(teamSetPlayFileButton, 6, 2, 1, 1);

        teamDirectoryPathLine = new QLineEdit(groupBox_2);
        teamDirectoryPathLine->setObjectName(QString::fromUtf8("teamDirectoryPathLine"));

        gridLayout_3->addWidget(teamDirectoryPathLine, 2, 1, 1, 1);

        label_3 = new QLabel(groupBox_2);
        label_3->setObjectName(QString::fromUtf8("label_3"));

        gridLayout_3->addWidget(label_3, 2, 0, 1, 1);

        teamDirectoryButton = new QPushButton(groupBox_2);
        teamDirectoryButton->setObjectName(QString::fromUtf8("teamDirectoryButton"));

        gridLayout_3->addWidget(teamDirectoryButton, 2, 2, 1, 1);

        label_5 = new QLabel(groupBox_2);
        label_5->setObjectName(QString::fromUtf8("label_5"));

        gridLayout_3->addWidget(label_5, 6, 0, 1, 1);


        gridLayout->addWidget(groupBox_2, 1, 0, 1, 3);

        groupBox_3 = new QGroupBox(SpTestRCSoccerSimConfigDialog);
        groupBox_3->setObjectName(QString::fromUtf8("groupBox_3"));
        gridLayout_4 = new QGridLayout(groupBox_3);
        gridLayout_4->setObjectName(QString::fromUtf8("gridLayout_4"));
        label = new QLabel(groupBox_3);
        label->setObjectName(QString::fromUtf8("label"));

        gridLayout_4->addWidget(label, 0, 0, 1, 1);

        logFilesDirectoryPathLine = new QLineEdit(groupBox_3);
        logFilesDirectoryPathLine->setObjectName(QString::fromUtf8("logFilesDirectoryPathLine"));

        gridLayout_4->addWidget(logFilesDirectoryPathLine, 0, 1, 1, 1);

        logFilesDirectoryButton = new QPushButton(groupBox_3);
        logFilesDirectoryButton->setObjectName(QString::fromUtf8("logFilesDirectoryButton"));

        gridLayout_4->addWidget(logFilesDirectoryButton, 0, 2, 1, 1);

        label_2 = new QLabel(groupBox_3);
        label_2->setObjectName(QString::fromUtf8("label_2"));

        gridLayout_4->addWidget(label_2, 1, 0, 1, 1);

        simulatorExecutablePathLine = new QLineEdit(groupBox_3);
        simulatorExecutablePathLine->setObjectName(QString::fromUtf8("simulatorExecutablePathLine"));

        gridLayout_4->addWidget(simulatorExecutablePathLine, 1, 1, 1, 1);

        simulatorExecutableButton = new QPushButton(groupBox_3);
        simulatorExecutableButton->setObjectName(QString::fromUtf8("simulatorExecutableButton"));

        gridLayout_4->addWidget(simulatorExecutableButton, 1, 2, 1, 1);


        gridLayout->addWidget(groupBox_3, 0, 0, 1, 3);

        opponentGroup = new QGroupBox(SpTestRCSoccerSimConfigDialog);
        opponentGroup->setObjectName(QString::fromUtf8("opponentGroup"));
        sizePolicy.setHeightForWidth(opponentGroup->sizePolicy().hasHeightForWidth());
        opponentGroup->setSizePolicy(sizePolicy);
        opponentGroup->setMinimumSize(QSize(774, 96));
        opponentGroup->setCheckable(true);
        gridLayout_2 = new QGridLayout(opponentGroup);
#ifndef Q_OS_MAC
        gridLayout_2->setContentsMargins(9, 9, 9, 9);
#endif
        gridLayout_2->setObjectName(QString::fromUtf8("gridLayout_2"));
        opponentScriptPathLine = new QLineEdit(opponentGroup);
        opponentScriptPathLine->setObjectName(QString::fromUtf8("opponentScriptPathLine"));

        gridLayout_2->addWidget(opponentScriptPathLine, 1, 1, 1, 1);

        label_9 = new QLabel(opponentGroup);
        label_9->setObjectName(QString::fromUtf8("label_9"));

        gridLayout_2->addWidget(label_9, 1, 0, 1, 1);

        opponentScriptButton = new QPushButton(opponentGroup);
        opponentScriptButton->setObjectName(QString::fromUtf8("opponentScriptButton"));

        gridLayout_2->addWidget(opponentScriptButton, 1, 2, 1, 1);

        label_6 = new QLabel(opponentGroup);
        label_6->setObjectName(QString::fromUtf8("label_6"));

        gridLayout_2->addWidget(label_6, 0, 0, 1, 1);

        opponentDirectoryPathLine = new QLineEdit(opponentGroup);
        opponentDirectoryPathLine->setObjectName(QString::fromUtf8("opponentDirectoryPathLine"));

        gridLayout_2->addWidget(opponentDirectoryPathLine, 0, 1, 1, 1);

        opponentDirectoryButton = new QPushButton(opponentGroup);
        opponentDirectoryButton->setObjectName(QString::fromUtf8("opponentDirectoryButton"));

        gridLayout_2->addWidget(opponentDirectoryButton, 0, 2, 1, 1);


        gridLayout->addWidget(opponentGroup, 3, 0, 1, 3);

        cancelButton = new QPushButton(SpTestRCSoccerSimConfigDialog);
        cancelButton->setObjectName(QString::fromUtf8("cancelButton"));

        gridLayout->addWidget(cancelButton, 5, 0, 1, 1);

        resetButton = new QPushButton(SpTestRCSoccerSimConfigDialog);
        resetButton->setObjectName(QString::fromUtf8("resetButton"));

        gridLayout->addWidget(resetButton, 5, 2, 1, 1);

        testButton = new QPushButton(SpTestRCSoccerSimConfigDialog);
        testButton->setObjectName(QString::fromUtf8("testButton"));
        testButton->setDefault(true);

        gridLayout->addWidget(testButton, 5, 1, 1, 1);

        QWidget::setTabOrder(logFilesDirectoryPathLine, logFilesDirectoryButton);
        QWidget::setTabOrder(logFilesDirectoryButton, simulatorExecutablePathLine);
        QWidget::setTabOrder(simulatorExecutablePathLine, simulatorExecutableButton);
        QWidget::setTabOrder(simulatorExecutableButton, teamDirectoryPathLine);
        QWidget::setTabOrder(teamDirectoryPathLine, teamDirectoryButton);
        QWidget::setTabOrder(teamDirectoryButton, teamScriptPathLine);
        QWidget::setTabOrder(teamScriptPathLine, teamScriptButton);
        QWidget::setTabOrder(teamScriptButton, teamSetPlayFilePathLine);
        QWidget::setTabOrder(teamSetPlayFilePathLine, teamSetPlayFileButton);
        QWidget::setTabOrder(teamSetPlayFileButton, opponentGroup);
        QWidget::setTabOrder(opponentGroup, opponentDirectoryPathLine);
        QWidget::setTabOrder(opponentDirectoryPathLine, opponentDirectoryButton);
        QWidget::setTabOrder(opponentDirectoryButton, opponentScriptPathLine);
        QWidget::setTabOrder(opponentScriptPathLine, opponentScriptButton);
        QWidget::setTabOrder(opponentScriptButton, cancelButton);

        retranslateUi(SpTestRCSoccerSimConfigDialog);

        QMetaObject::connectSlotsByName(SpTestRCSoccerSimConfigDialog);
    } // setupUi

    void retranslateUi(QDialog *SpTestRCSoccerSimConfigDialog)
    {
        SpTestRCSoccerSimConfigDialog->setWindowTitle(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Team configurations for 2D test game...", 0, QApplication::UnicodeUTF8));
        groupBox_2->setTitle(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Team Settings", 0, QApplication::UnicodeUTF8));
        label_4->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Team script", 0, QApplication::UnicodeUTF8));
        teamScriptButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "search...", 0, QApplication::UnicodeUTF8));
        teamSetPlayFileButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "search...", 0, QApplication::UnicodeUTF8));
        label_3->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Team directory", 0, QApplication::UnicodeUTF8));
        teamDirectoryButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "search...", 0, QApplication::UnicodeUTF8));
        label_5->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Team SetPlay file", 0, QApplication::UnicodeUTF8));
        groupBox_3->setTitle(QApplication::translate("SpTestRCSoccerSimConfigDialog", "General Settings", 0, QApplication::UnicodeUTF8));
        label->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Log Files Directory", 0, QApplication::UnicodeUTF8));
        logFilesDirectoryButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "search...", 0, QApplication::UnicodeUTF8));
        label_2->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Simmulator executable", 0, QApplication::UnicodeUTF8));
        simulatorExecutableButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "search...", 0, QApplication::UnicodeUTF8));
        opponentGroup->setTitle(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Opponent Settings", 0, QApplication::UnicodeUTF8));
        label_9->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Opponent script", 0, QApplication::UnicodeUTF8));
        opponentScriptButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "search...", 0, QApplication::UnicodeUTF8));
        label_6->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Opponent directory", 0, QApplication::UnicodeUTF8));
        opponentDirectoryButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "search...", 0, QApplication::UnicodeUTF8));
        cancelButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Cancel", 0, QApplication::UnicodeUTF8));
        resetButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Reset", 0, QApplication::UnicodeUTF8));
        testButton->setText(QApplication::translate("SpTestRCSoccerSimConfigDialog", "Test !", 0, QApplication::UnicodeUTF8));
    } // retranslateUi

};

namespace Ui {
    class SpTestRCSoccerSimConfigDialog: public Ui_SpTestRCSoccerSimConfigDialog {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_SPTESTRCSOCCERSIMCONFIGDIALOG_H
