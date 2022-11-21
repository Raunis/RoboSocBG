/********************************************************************************
** Form generated from reading UI file 'sprelativepositiondialog.ui'
**
** Created by: Qt User Interface Compiler version 4.8.7
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_SPRELATIVEPOSITIONDIALOG_H
#define UI_SPRELATIVEPOSITIONDIALOG_H

#include <QtCore/QVariant>
#include <QtGui/QAction>
#include <QtGui/QApplication>
#include <QtGui/QButtonGroup>
#include <QtGui/QComboBox>
#include <QtGui/QDialog>
#include <QtGui/QGridLayout>
#include <QtGui/QHBoxLayout>
#include <QtGui/QHeaderView>
#include <QtGui/QLabel>
#include <QtGui/QPushButton>
#include <QtGui/QRadioButton>

QT_BEGIN_NAMESPACE

class Ui_SpRelativePositionDialog
{
public:
    QGridLayout *gridLayout;
    QRadioButton *ballRelative;
    QComboBox *playerCB;
    QRadioButton *pointRelative;
    QComboBox *pointCB;
    QRadioButton *playerRelative;
    QHBoxLayout *horizontalLayout;
    QPushButton *cancelButton;
    QPushButton *saveButton;
    QPushButton *resetButton;
    QRadioButton *positionalRB;
    QLabel *label;
    QRadioButton *hideCB;
    QButtonGroup *buttonGroup;

    void setupUi(QDialog *SpRelativePositionDialog)
    {
        if (SpRelativePositionDialog->objectName().isEmpty())
            SpRelativePositionDialog->setObjectName(QString::fromUtf8("SpRelativePositionDialog"));
        SpRelativePositionDialog->setWindowModality(Qt::ApplicationModal);
        SpRelativePositionDialog->resize(311, 220);
        QSizePolicy sizePolicy(QSizePolicy::Maximum, QSizePolicy::Maximum);
        sizePolicy.setHorizontalStretch(0);
        sizePolicy.setVerticalStretch(0);
        sizePolicy.setHeightForWidth(SpRelativePositionDialog->sizePolicy().hasHeightForWidth());
        SpRelativePositionDialog->setSizePolicy(sizePolicy);
        SpRelativePositionDialog->setMaximumSize(QSize(311, 220));
        gridLayout = new QGridLayout(SpRelativePositionDialog);
        gridLayout->setObjectName(QString::fromUtf8("gridLayout"));
        ballRelative = new QRadioButton(SpRelativePositionDialog);
        buttonGroup = new QButtonGroup(SpRelativePositionDialog);
        buttonGroup->setObjectName(QString::fromUtf8("buttonGroup"));
        buttonGroup->addButton(ballRelative);
        ballRelative->setObjectName(QString::fromUtf8("ballRelative"));

        gridLayout->addWidget(ballRelative, 3, 0, 1, 1);

        playerCB = new QComboBox(SpRelativePositionDialog);
        playerCB->setObjectName(QString::fromUtf8("playerCB"));

        gridLayout->addWidget(playerCB, 5, 1, 1, 1);

        pointRelative = new QRadioButton(SpRelativePositionDialog);
        buttonGroup->addButton(pointRelative);
        pointRelative->setObjectName(QString::fromUtf8("pointRelative"));
        QSizePolicy sizePolicy1(QSizePolicy::Fixed, QSizePolicy::Fixed);
        sizePolicy1.setHorizontalStretch(0);
        sizePolicy1.setVerticalStretch(0);
        sizePolicy1.setHeightForWidth(pointRelative->sizePolicy().hasHeightForWidth());
        pointRelative->setSizePolicy(sizePolicy1);

        gridLayout->addWidget(pointRelative, 6, 0, 1, 1);

        pointCB = new QComboBox(SpRelativePositionDialog);
        pointCB->setObjectName(QString::fromUtf8("pointCB"));

        gridLayout->addWidget(pointCB, 6, 1, 1, 1);

        playerRelative = new QRadioButton(SpRelativePositionDialog);
        buttonGroup->addButton(playerRelative);
        playerRelative->setObjectName(QString::fromUtf8("playerRelative"));
        sizePolicy1.setHeightForWidth(playerRelative->sizePolicy().hasHeightForWidth());
        playerRelative->setSizePolicy(sizePolicy1);

        gridLayout->addWidget(playerRelative, 5, 0, 1, 1);

        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName(QString::fromUtf8("horizontalLayout"));
        cancelButton = new QPushButton(SpRelativePositionDialog);
        cancelButton->setObjectName(QString::fromUtf8("cancelButton"));

        horizontalLayout->addWidget(cancelButton);

        saveButton = new QPushButton(SpRelativePositionDialog);
        saveButton->setObjectName(QString::fromUtf8("saveButton"));
        saveButton->setDefault(true);

        horizontalLayout->addWidget(saveButton);

        resetButton = new QPushButton(SpRelativePositionDialog);
        resetButton->setObjectName(QString::fromUtf8("resetButton"));

        horizontalLayout->addWidget(resetButton);


        gridLayout->addLayout(horizontalLayout, 7, 0, 1, 2);

        positionalRB = new QRadioButton(SpRelativePositionDialog);
        buttonGroup->addButton(positionalRB);
        positionalRB->setObjectName(QString::fromUtf8("positionalRB"));
        positionalRB->setEnabled(true);

        gridLayout->addWidget(positionalRB, 0, 0, 1, 1);

        label = new QLabel(SpRelativePositionDialog);
        label->setObjectName(QString::fromUtf8("label"));
        label->setAlignment(Qt::AlignCenter);

        gridLayout->addWidget(label, 1, 0, 1, 2);

        hideCB = new QRadioButton(SpRelativePositionDialog);
        buttonGroup->addButton(hideCB);
        hideCB->setObjectName(QString::fromUtf8("hideCB"));
        hideCB->setChecked(true);

        gridLayout->addWidget(hideCB, 2, 0, 1, 1);


        retranslateUi(SpRelativePositionDialog);

        QMetaObject::connectSlotsByName(SpRelativePositionDialog);
    } // setupUi

    void retranslateUi(QDialog *SpRelativePositionDialog)
    {
        SpRelativePositionDialog->setWindowTitle(QApplication::translate("SpRelativePositionDialog", "Dialog", 0, QApplication::UnicodeUTF8));
        ballRelative->setText(QApplication::translate("SpRelativePositionDialog", "... to Ball", 0, QApplication::UnicodeUTF8));
        pointRelative->setText(QApplication::translate("SpRelativePositionDialog", "... to a point", 0, QApplication::UnicodeUTF8));
        playerRelative->setText(QApplication::translate("SpRelativePositionDialog", "... to Player", 0, QApplication::UnicodeUTF8));
        cancelButton->setText(QApplication::translate("SpRelativePositionDialog", "Cancel", 0, QApplication::UnicodeUTF8));
        saveButton->setText(QApplication::translate("SpRelativePositionDialog", "Save", 0, QApplication::UnicodeUTF8));
        resetButton->setText(QApplication::translate("SpRelativePositionDialog", "Reset", 0, QApplication::UnicodeUTF8));
        positionalRB->setText(QApplication::translate("SpRelativePositionDialog", "Positional", 0, QApplication::UnicodeUTF8));
        label->setText(QApplication::translate("SpRelativePositionDialog", "Relative Positions..", 0, QApplication::UnicodeUTF8));
        hideCB->setText(QApplication::translate("SpRelativePositionDialog", "hideCB", 0, QApplication::UnicodeUTF8));
    } // retranslateUi

};

namespace Ui {
    class SpRelativePositionDialog: public Ui_SpRelativePositionDialog {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_SPRELATIVEPOSITIONDIALOG_H
