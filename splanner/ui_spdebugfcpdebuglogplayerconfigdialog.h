/********************************************************************************
** Form generated from reading UI file 'spdebugfcpdebuglogplayerconfigdialog.ui'
**
** Created by: Qt User Interface Compiler version 4.8.7
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_SPDEBUGFCPDEBUGLOGPLAYERCONFIGDIALOG_H
#define UI_SPDEBUGFCPDEBUGLOGPLAYERCONFIGDIALOG_H

#include <QtCore/QVariant>
#include <QtGui/QAction>
#include <QtGui/QApplication>
#include <QtGui/QButtonGroup>
#include <QtGui/QDialog>
#include <QtGui/QGridLayout>
#include <QtGui/QGroupBox>
#include <QtGui/QHBoxLayout>
#include <QtGui/QHeaderView>
#include <QtGui/QLabel>
#include <QtGui/QLineEdit>
#include <QtGui/QPushButton>

QT_BEGIN_NAMESPACE

class Ui_SpDebugFCPDebugLogPlayerConfigDialog
{
public:
    QGridLayout *gridLayout;
    QLabel *label;
    QLineEdit *gameLogFileLineEdit;
    QPushButton *gameLogFileButton;
    QGroupBox *groupBox;
    QGridLayout *gridLayout_2;
    QLabel *label_2;
    QLineEdit *playersLogDirectoryLineEdit;
    QPushButton *playersLogDirectoryhButton;
    QHBoxLayout *horizontalLayout;
    QPushButton *cancelButton;
    QPushButton *debugButton;
    QPushButton *ResetPushButton;

    void setupUi(QDialog *SpDebugFCPDebugLogPlayerConfigDialog)
    {
        if (SpDebugFCPDebugLogPlayerConfigDialog->objectName().isEmpty())
            SpDebugFCPDebugLogPlayerConfigDialog->setObjectName(QString::fromUtf8("SpDebugFCPDebugLogPlayerConfigDialog"));
        SpDebugFCPDebugLogPlayerConfigDialog->resize(609, 149);
        gridLayout = new QGridLayout(SpDebugFCPDebugLogPlayerConfigDialog);
        gridLayout->setObjectName(QString::fromUtf8("gridLayout"));
        label = new QLabel(SpDebugFCPDebugLogPlayerConfigDialog);
        label->setObjectName(QString::fromUtf8("label"));

        gridLayout->addWidget(label, 0, 0, 1, 1);

        gameLogFileLineEdit = new QLineEdit(SpDebugFCPDebugLogPlayerConfigDialog);
        gameLogFileLineEdit->setObjectName(QString::fromUtf8("gameLogFileLineEdit"));

        gridLayout->addWidget(gameLogFileLineEdit, 0, 1, 1, 1);

        gameLogFileButton = new QPushButton(SpDebugFCPDebugLogPlayerConfigDialog);
        gameLogFileButton->setObjectName(QString::fromUtf8("gameLogFileButton"));

        gridLayout->addWidget(gameLogFileButton, 0, 2, 1, 1);

        groupBox = new QGroupBox(SpDebugFCPDebugLogPlayerConfigDialog);
        groupBox->setObjectName(QString::fromUtf8("groupBox"));
        groupBox->setCheckable(true);
        gridLayout_2 = new QGridLayout(groupBox);
        gridLayout_2->setObjectName(QString::fromUtf8("gridLayout_2"));
        gridLayout_2->setContentsMargins(0, -1, 0, -1);
        label_2 = new QLabel(groupBox);
        label_2->setObjectName(QString::fromUtf8("label_2"));

        gridLayout_2->addWidget(label_2, 0, 0, 1, 1);

        playersLogDirectoryLineEdit = new QLineEdit(groupBox);
        playersLogDirectoryLineEdit->setObjectName(QString::fromUtf8("playersLogDirectoryLineEdit"));

        gridLayout_2->addWidget(playersLogDirectoryLineEdit, 0, 1, 1, 1);

        playersLogDirectoryhButton = new QPushButton(groupBox);
        playersLogDirectoryhButton->setObjectName(QString::fromUtf8("playersLogDirectoryhButton"));

        gridLayout_2->addWidget(playersLogDirectoryhButton, 0, 2, 1, 1);


        gridLayout->addWidget(groupBox, 1, 0, 1, 3);

        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName(QString::fromUtf8("horizontalLayout"));
        cancelButton = new QPushButton(SpDebugFCPDebugLogPlayerConfigDialog);
        cancelButton->setObjectName(QString::fromUtf8("cancelButton"));

        horizontalLayout->addWidget(cancelButton);

        debugButton = new QPushButton(SpDebugFCPDebugLogPlayerConfigDialog);
        debugButton->setObjectName(QString::fromUtf8("debugButton"));
        debugButton->setDefault(true);

        horizontalLayout->addWidget(debugButton);

        ResetPushButton = new QPushButton(SpDebugFCPDebugLogPlayerConfigDialog);
        ResetPushButton->setObjectName(QString::fromUtf8("ResetPushButton"));

        horizontalLayout->addWidget(ResetPushButton);


        gridLayout->addLayout(horizontalLayout, 2, 0, 1, 3);

        QWidget::setTabOrder(gameLogFileLineEdit, gameLogFileButton);
        QWidget::setTabOrder(gameLogFileButton, groupBox);
        QWidget::setTabOrder(groupBox, playersLogDirectoryLineEdit);
        QWidget::setTabOrder(playersLogDirectoryLineEdit, playersLogDirectoryhButton);
        QWidget::setTabOrder(playersLogDirectoryhButton, cancelButton);
        QWidget::setTabOrder(cancelButton, debugButton);
        QWidget::setTabOrder(debugButton, ResetPushButton);

        retranslateUi(SpDebugFCPDebugLogPlayerConfigDialog);

        QMetaObject::connectSlotsByName(SpDebugFCPDebugLogPlayerConfigDialog);
    } // setupUi

    void retranslateUi(QDialog *SpDebugFCPDebugLogPlayerConfigDialog)
    {
        SpDebugFCPDebugLogPlayerConfigDialog->setWindowTitle(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "Game log configuration for debug", 0, QApplication::UnicodeUTF8));
        label->setText(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "Game log file", 0, QApplication::UnicodeUTF8));
        gameLogFileButton->setText(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "Search...", 0, QApplication::UnicodeUTF8));
        groupBox->setTitle(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "With players log", 0, QApplication::UnicodeUTF8));
        label_2->setText(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "Players log directory", 0, QApplication::UnicodeUTF8));
        playersLogDirectoryhButton->setText(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "Search...", 0, QApplication::UnicodeUTF8));
        cancelButton->setText(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "Cancel", 0, QApplication::UnicodeUTF8));
        debugButton->setText(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "Debug!", 0, QApplication::UnicodeUTF8));
        ResetPushButton->setText(QApplication::translate("SpDebugFCPDebugLogPlayerConfigDialog", "Reset", 0, QApplication::UnicodeUTF8));
    } // retranslateUi

};

namespace Ui {
    class SpDebugFCPDebugLogPlayerConfigDialog: public Ui_SpDebugFCPDebugLogPlayerConfigDialog {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_SPDEBUGFCPDEBUGLOGPLAYERCONFIGDIALOG_H
