/********************************************************************************
** Form generated from reading UI file 'spinitdialog.ui'
**
** Created by: Qt User Interface Compiler version 4.8.7
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_SPINITDIALOG_H
#define UI_SPINITDIALOG_H

#include <QtCore/QVariant>
#include <QtGui/QAction>
#include <QtGui/QApplication>
#include <QtGui/QButtonGroup>
#include <QtGui/QCheckBox>
#include <QtGui/QComboBox>
#include <QtGui/QDialog>
#include <QtGui/QGroupBox>
#include <QtGui/QHBoxLayout>
#include <QtGui/QHeaderView>
#include <QtGui/QLabel>
#include <QtGui/QPushButton>
#include <QtGui/QRadioButton>
#include <QtGui/QSpacerItem>
#include <QtGui/QVBoxLayout>

QT_BEGIN_NAMESPACE

class Ui_SpInitDialog
{
public:
    QVBoxLayout *verticalLayout;
    QHBoxLayout *horizontalLayout_2;
    QLabel *label;
    QSpacerItem *horizontalSpacer;
    QRadioButton *offensiveTypeRB;
    QRadioButton *defensiveTypeRB;
    QSpacerItem *horizontalSpacer_2;
    QHBoxLayout *horizontalLayout_3;
    QLabel *label_2;
    QComboBox *situationComboBox;
    QSpacerItem *horizontalSpacer_6;
    QHBoxLayout *OptionsLayout;
    QGroupBox *positionGroupBox;
    QVBoxLayout *verticalLayout_9;
    QVBoxLayout *verticalLayout_13;
    QCheckBox *pointBox;
    QCheckBox *fieldBox;
    QGroupBox *horizontalSides;
    QHBoxLayout *horizontalLayout_6;
    QCheckBox *ourMiddleField;
    QCheckBox *theirMiddleField;
    QSpacerItem *horizontalSpacer_8;
    QGroupBox *sixHorizontalAreas;
    QHBoxLayout *horizontalLayout_7;
    QCheckBox *ourBack;
    QCheckBox *ourMiddle;
    QCheckBox *ourFront;
    QCheckBox *theirFront;
    QCheckBox *theirMiddle;
    QCheckBox *theirBack;
    QGroupBox *verticalSides;
    QHBoxLayout *horizontalLayout_5;
    QCheckBox *leftCB;
    QCheckBox *rightCB;
    QSpacerItem *horizontalSpacer_7;
    QGroupBox *sixVerticalAreas;
    QHBoxLayout *horizontalLayout_8;
    QCheckBox *farLeft;
    QCheckBox *midLeft;
    QCheckBox *cenLeft;
    QCheckBox *cenRight;
    QCheckBox *midRight;
    QCheckBox *farRight;
    QHBoxLayout *horizontalLayout;
    QSpacerItem *horizontalSpacer_4;
    QPushButton *cancelButton;
    QSpacerItem *horizontalSpacer_3;
    QPushButton *createButton;
    QSpacerItem *horizontalSpacer_5;

    void setupUi(QDialog *SpInitDialog)
    {
        if (SpInitDialog->objectName().isEmpty())
            SpInitDialog->setObjectName(QString::fromUtf8("SpInitDialog"));
        SpInitDialog->setWindowModality(Qt::ApplicationModal);
        SpInitDialog->resize(653, 344);
        SpInitDialog->setMinimumSize(QSize(653, 344));
        SpInitDialog->setMaximumSize(QSize(653, 344));
        verticalLayout = new QVBoxLayout(SpInitDialog);
        verticalLayout->setObjectName(QString::fromUtf8("verticalLayout"));
        horizontalLayout_2 = new QHBoxLayout();
        horizontalLayout_2->setObjectName(QString::fromUtf8("horizontalLayout_2"));
        label = new QLabel(SpInitDialog);
        label->setObjectName(QString::fromUtf8("label"));
        QSizePolicy sizePolicy(QSizePolicy::Maximum, QSizePolicy::Maximum);
        sizePolicy.setHorizontalStretch(0);
        sizePolicy.setVerticalStretch(0);
        sizePolicy.setHeightForWidth(label->sizePolicy().hasHeightForWidth());
        label->setSizePolicy(sizePolicy);
        QFont font;
        font.setBold(true);
        font.setWeight(75);
        label->setFont(font);

        horizontalLayout_2->addWidget(label);

        horizontalSpacer = new QSpacerItem(20, 20, QSizePolicy::Maximum, QSizePolicy::Minimum);

        horizontalLayout_2->addItem(horizontalSpacer);

        offensiveTypeRB = new QRadioButton(SpInitDialog);
        offensiveTypeRB->setObjectName(QString::fromUtf8("offensiveTypeRB"));
        QSizePolicy sizePolicy1(QSizePolicy::Maximum, QSizePolicy::Fixed);
        sizePolicy1.setHorizontalStretch(0);
        sizePolicy1.setVerticalStretch(0);
        sizePolicy1.setHeightForWidth(offensiveTypeRB->sizePolicy().hasHeightForWidth());
        offensiveTypeRB->setSizePolicy(sizePolicy1);
        offensiveTypeRB->setMinimumSize(QSize(93, 22));
        offensiveTypeRB->setChecked(true);

        horizontalLayout_2->addWidget(offensiveTypeRB);

        defensiveTypeRB = new QRadioButton(SpInitDialog);
        defensiveTypeRB->setObjectName(QString::fromUtf8("defensiveTypeRB"));
        defensiveTypeRB->setEnabled(true);
        sizePolicy1.setHeightForWidth(defensiveTypeRB->sizePolicy().hasHeightForWidth());
        defensiveTypeRB->setSizePolicy(sizePolicy1);
        defensiveTypeRB->setMinimumSize(QSize(98, 22));

        horizontalLayout_2->addWidget(defensiveTypeRB);

        horizontalSpacer_2 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout_2->addItem(horizontalSpacer_2);


        verticalLayout->addLayout(horizontalLayout_2);

        horizontalLayout_3 = new QHBoxLayout();
        horizontalLayout_3->setObjectName(QString::fromUtf8("horizontalLayout_3"));
        label_2 = new QLabel(SpInitDialog);
        label_2->setObjectName(QString::fromUtf8("label_2"));
        sizePolicy.setHeightForWidth(label_2->sizePolicy().hasHeightForWidth());
        label_2->setSizePolicy(sizePolicy);
        label_2->setFont(font);

        horizontalLayout_3->addWidget(label_2);

        situationComboBox = new QComboBox(SpInitDialog);
        situationComboBox->setObjectName(QString::fromUtf8("situationComboBox"));

        horizontalLayout_3->addWidget(situationComboBox);

        horizontalSpacer_6 = new QSpacerItem(80, 20, QSizePolicy::Maximum, QSizePolicy::Minimum);

        horizontalLayout_3->addItem(horizontalSpacer_6);


        verticalLayout->addLayout(horizontalLayout_3);

        OptionsLayout = new QHBoxLayout();
        OptionsLayout->setObjectName(QString::fromUtf8("OptionsLayout"));
        positionGroupBox = new QGroupBox(SpInitDialog);
        positionGroupBox->setObjectName(QString::fromUtf8("positionGroupBox"));
        QSizePolicy sizePolicy2(QSizePolicy::MinimumExpanding, QSizePolicy::MinimumExpanding);
        sizePolicy2.setHorizontalStretch(0);
        sizePolicy2.setVerticalStretch(0);
        sizePolicy2.setHeightForWidth(positionGroupBox->sizePolicy().hasHeightForWidth());
        positionGroupBox->setSizePolicy(sizePolicy2);
        QFont font1;
        font1.setKerning(false);
        positionGroupBox->setFont(font1);
        verticalLayout_9 = new QVBoxLayout(positionGroupBox);
        verticalLayout_9->setSpacing(0);
        verticalLayout_9->setContentsMargins(0, 0, 0, 0);
        verticalLayout_9->setObjectName(QString::fromUtf8("verticalLayout_9"));
        verticalLayout_13 = new QVBoxLayout();
        verticalLayout_13->setSpacing(0);
        verticalLayout_13->setObjectName(QString::fromUtf8("verticalLayout_13"));
        verticalLayout_13->setContentsMargins(8, -1, -1, -1);
        pointBox = new QCheckBox(positionGroupBox);
        pointBox->setObjectName(QString::fromUtf8("pointBox"));
        pointBox->setLayoutDirection(Qt::LeftToRight);
        pointBox->setAutoFillBackground(false);
        pointBox->setTristate(false);

        verticalLayout_13->addWidget(pointBox);

        fieldBox = new QCheckBox(positionGroupBox);
        fieldBox->setObjectName(QString::fromUtf8("fieldBox"));

        verticalLayout_13->addWidget(fieldBox);


        verticalLayout_9->addLayout(verticalLayout_13);

        horizontalSides = new QGroupBox(positionGroupBox);
        horizontalSides->setObjectName(QString::fromUtf8("horizontalSides"));
        horizontalLayout_6 = new QHBoxLayout(horizontalSides);
        horizontalLayout_6->setSpacing(0);
        horizontalLayout_6->setContentsMargins(0, 0, 0, 0);
        horizontalLayout_6->setObjectName(QString::fromUtf8("horizontalLayout_6"));
        ourMiddleField = new QCheckBox(horizontalSides);
        ourMiddleField->setObjectName(QString::fromUtf8("ourMiddleField"));

        horizontalLayout_6->addWidget(ourMiddleField);

        theirMiddleField = new QCheckBox(horizontalSides);
        theirMiddleField->setObjectName(QString::fromUtf8("theirMiddleField"));

        horizontalLayout_6->addWidget(theirMiddleField);

        horizontalSpacer_8 = new QSpacerItem(19, 20, QSizePolicy::Fixed, QSizePolicy::Minimum);

        horizontalLayout_6->addItem(horizontalSpacer_8);


        verticalLayout_9->addWidget(horizontalSides);

        sixHorizontalAreas = new QGroupBox(positionGroupBox);
        sixHorizontalAreas->setObjectName(QString::fromUtf8("sixHorizontalAreas"));
        horizontalLayout_7 = new QHBoxLayout(sixHorizontalAreas);
        horizontalLayout_7->setSpacing(0);
        horizontalLayout_7->setContentsMargins(0, 0, 0, 0);
        horizontalLayout_7->setObjectName(QString::fromUtf8("horizontalLayout_7"));
        ourBack = new QCheckBox(sixHorizontalAreas);
        ourBack->setObjectName(QString::fromUtf8("ourBack"));

        horizontalLayout_7->addWidget(ourBack);

        ourMiddle = new QCheckBox(sixHorizontalAreas);
        ourMiddle->setObjectName(QString::fromUtf8("ourMiddle"));

        horizontalLayout_7->addWidget(ourMiddle);

        ourFront = new QCheckBox(sixHorizontalAreas);
        ourFront->setObjectName(QString::fromUtf8("ourFront"));

        horizontalLayout_7->addWidget(ourFront);

        theirFront = new QCheckBox(sixHorizontalAreas);
        theirFront->setObjectName(QString::fromUtf8("theirFront"));

        horizontalLayout_7->addWidget(theirFront);

        theirMiddle = new QCheckBox(sixHorizontalAreas);
        theirMiddle->setObjectName(QString::fromUtf8("theirMiddle"));

        horizontalLayout_7->addWidget(theirMiddle);

        theirBack = new QCheckBox(sixHorizontalAreas);
        theirBack->setObjectName(QString::fromUtf8("theirBack"));

        horizontalLayout_7->addWidget(theirBack);


        verticalLayout_9->addWidget(sixHorizontalAreas);

        verticalSides = new QGroupBox(positionGroupBox);
        verticalSides->setObjectName(QString::fromUtf8("verticalSides"));
        horizontalLayout_5 = new QHBoxLayout(verticalSides);
        horizontalLayout_5->setSpacing(0);
        horizontalLayout_5->setContentsMargins(0, 0, 0, 0);
        horizontalLayout_5->setObjectName(QString::fromUtf8("horizontalLayout_5"));
        leftCB = new QCheckBox(verticalSides);
        leftCB->setObjectName(QString::fromUtf8("leftCB"));
        leftCB->setEnabled(true);

        horizontalLayout_5->addWidget(leftCB);

        rightCB = new QCheckBox(verticalSides);
        rightCB->setObjectName(QString::fromUtf8("rightCB"));
        rightCB->setCheckable(true);

        horizontalLayout_5->addWidget(rightCB);

        horizontalSpacer_7 = new QSpacerItem(18, 20, QSizePolicy::Fixed, QSizePolicy::Minimum);

        horizontalLayout_5->addItem(horizontalSpacer_7);


        verticalLayout_9->addWidget(verticalSides);

        sixVerticalAreas = new QGroupBox(positionGroupBox);
        sixVerticalAreas->setObjectName(QString::fromUtf8("sixVerticalAreas"));
        horizontalLayout_8 = new QHBoxLayout(sixVerticalAreas);
        horizontalLayout_8->setSpacing(0);
        horizontalLayout_8->setContentsMargins(0, 0, 0, 0);
        horizontalLayout_8->setObjectName(QString::fromUtf8("horizontalLayout_8"));
        farLeft = new QCheckBox(sixVerticalAreas);
        farLeft->setObjectName(QString::fromUtf8("farLeft"));

        horizontalLayout_8->addWidget(farLeft);

        midLeft = new QCheckBox(sixVerticalAreas);
        midLeft->setObjectName(QString::fromUtf8("midLeft"));

        horizontalLayout_8->addWidget(midLeft);

        cenLeft = new QCheckBox(sixVerticalAreas);
        cenLeft->setObjectName(QString::fromUtf8("cenLeft"));

        horizontalLayout_8->addWidget(cenLeft);

        cenRight = new QCheckBox(sixVerticalAreas);
        cenRight->setObjectName(QString::fromUtf8("cenRight"));

        horizontalLayout_8->addWidget(cenRight);

        midRight = new QCheckBox(sixVerticalAreas);
        midRight->setObjectName(QString::fromUtf8("midRight"));

        horizontalLayout_8->addWidget(midRight);

        farRight = new QCheckBox(sixVerticalAreas);
        farRight->setObjectName(QString::fromUtf8("farRight"));

        horizontalLayout_8->addWidget(farRight);


        verticalLayout_9->addWidget(sixVerticalAreas);


        OptionsLayout->addWidget(positionGroupBox);


        verticalLayout->addLayout(OptionsLayout);

        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName(QString::fromUtf8("horizontalLayout"));
        horizontalSpacer_4 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_4);

        cancelButton = new QPushButton(SpInitDialog);
        cancelButton->setObjectName(QString::fromUtf8("cancelButton"));

        horizontalLayout->addWidget(cancelButton);

        horizontalSpacer_3 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_3);

        createButton = new QPushButton(SpInitDialog);
        createButton->setObjectName(QString::fromUtf8("createButton"));
        createButton->setAutoDefault(false);
        createButton->setDefault(true);

        horizontalLayout->addWidget(createButton);

        horizontalSpacer_5 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_5);


        verticalLayout->addLayout(horizontalLayout);


        retranslateUi(SpInitDialog);

        QMetaObject::connectSlotsByName(SpInitDialog);
    } // setupUi

    void retranslateUi(QDialog *SpInitDialog)
    {
        SpInitDialog->setWindowTitle(QApplication::translate("SpInitDialog", "Create new SetPlay", 0, QApplication::UnicodeUTF8));
        label->setText(QApplication::translate("SpInitDialog", "Type", 0, QApplication::UnicodeUTF8));
        offensiveTypeRB->setText(QApplication::translate("SpInitDialog", "Offensive", 0, QApplication::UnicodeUTF8));
        defensiveTypeRB->setText(QApplication::translate("SpInitDialog", "Defensive", 0, QApplication::UnicodeUTF8));
        label_2->setText(QApplication::translate("SpInitDialog", "Situation", 0, QApplication::UnicodeUTF8));
        positionGroupBox->setTitle(QApplication::translate("SpInitDialog", "Position", 0, QApplication::UnicodeUTF8));
        pointBox->setText(QApplication::translate("SpInitDialog", "Point", 0, QApplication::UnicodeUTF8));
        fieldBox->setText(QApplication::translate("SpInitDialog", "Field", 0, QApplication::UnicodeUTF8));
        horizontalSides->setTitle(QString());
        ourMiddleField->setText(QApplication::translate("SpInitDialog", "Our middle field", 0, QApplication::UnicodeUTF8));
        theirMiddleField->setText(QApplication::translate("SpInitDialog", "Their middle field", 0, QApplication::UnicodeUTF8));
        sixHorizontalAreas->setTitle(QString());
        ourBack->setText(QApplication::translate("SpInitDialog", "Our back", 0, QApplication::UnicodeUTF8));
        ourMiddle->setText(QApplication::translate("SpInitDialog", "Our middle", 0, QApplication::UnicodeUTF8));
        ourFront->setText(QApplication::translate("SpInitDialog", "Our front", 0, QApplication::UnicodeUTF8));
        theirFront->setText(QApplication::translate("SpInitDialog", "Their front", 0, QApplication::UnicodeUTF8));
        theirMiddle->setText(QApplication::translate("SpInitDialog", "Their middle", 0, QApplication::UnicodeUTF8));
        theirBack->setText(QApplication::translate("SpInitDialog", "Their back", 0, QApplication::UnicodeUTF8));
        verticalSides->setTitle(QString());
        leftCB->setText(QApplication::translate("SpInitDialog", "Left", 0, QApplication::UnicodeUTF8));
        rightCB->setText(QApplication::translate("SpInitDialog", "Right", 0, QApplication::UnicodeUTF8));
        sixVerticalAreas->setTitle(QString());
        farLeft->setText(QApplication::translate("SpInitDialog", "Far left", 0, QApplication::UnicodeUTF8));
        midLeft->setText(QApplication::translate("SpInitDialog", "Middle left", 0, QApplication::UnicodeUTF8));
        cenLeft->setText(QApplication::translate("SpInitDialog", "Center left", 0, QApplication::UnicodeUTF8));
        cenRight->setText(QApplication::translate("SpInitDialog", "Center right", 0, QApplication::UnicodeUTF8));
        midRight->setText(QApplication::translate("SpInitDialog", "Middle right", 0, QApplication::UnicodeUTF8));
        farRight->setText(QApplication::translate("SpInitDialog", "Far right", 0, QApplication::UnicodeUTF8));
        cancelButton->setText(QApplication::translate("SpInitDialog", "Cancel", 0, QApplication::UnicodeUTF8));
        createButton->setText(QApplication::translate("SpInitDialog", "Create", 0, QApplication::UnicodeUTF8));
    } // retranslateUi

};

namespace Ui {
    class SpInitDialog: public Ui_SpInitDialog {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_SPINITDIALOG_H
