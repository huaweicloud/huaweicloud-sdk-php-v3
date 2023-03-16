<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MvsInvoiceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MvsInvoiceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  发票代码。
    * number  发票号码。
    * machinePrintedCode  机打代码。
    * machinePrintedNumber  机打号码。
    * issueDate  开票日期。
    * machineNumber  机器编号。
    * buyerName  购买方名称、二手车买方单位/个人
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号、二手车买方单位代码/身份证号
    * buyerAddress  二手车买方单位/个人住址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * buyerPhone  二手车买方单位/个人电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerName  销货单位名称、二手车卖方单位/个人
    * sellerPhone  销售方电话、二手车卖方电话
    * sellerId  销售方纳税人识别号、二手车卖方单位代码/身份证号
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址、二手车卖方单位/个人地址
    * licencePlateNumber  二手车车牌照号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * registrationNumber  二手车登记证号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * deptMotorVehicles  二手车转入地车管所名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerBank  销售方开户行。
    * vehicleType  车辆类型。
    * brandModel  厂牌型号。
    * manufacturingLocation  产地。
    * qualityCertificate  合格证号。
    * importCertificate  进口证明书号。
    * inspectionNumber  商检单号。
    * engineNumber  发动机号码。
    * vehicleIdentificationNumber  车辆识别代号/车架号码。
    * tonnage  吨位。
    * seatingCapacity  限乘人数。
    * taxAuthority  主管税务机关。
    * taxAuthorityCode  主管税务机关代码。
    * taxPaymentReceipt  完税凭证号码。
    * taxRate  增值税税率或征收率。
    * tax  增值税税额。
    * taxExclusivePrice  不含税价。
    * total  价税合计、二手车车价合计（小写）
    * totalChinese  价税合计大写、二手车车价合计（大写）
    * fiscalCode  税控码。
    * auctionOrgName  二手车经营拍卖单位名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgAddress  二手车经营拍卖单位地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgId  二手车经营拍卖单位纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgBankAccount  二手车经营拍卖单位银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgPhone  二手车经营拍卖单位电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketName  二手车市场名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketId  二手车市场纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketAddress  二手车市场地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketBankAccount  二手车市场银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketPhone  二手车市场电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * remark  备注
    * drawerName  开票人
    * type  枚举值，机动车销售统一发票或者二手车销售统一发票。 当入参中包含type时返回。
    * textLocation  检测框对象，内部为字段-框坐标对。如 code:[[x0, y0],[x1,y1],[x2,y2],[x3,y3]], 点的顺序是左上角、右上角、右下角、左下角。如果原图找不到字段，返回空列表。
    * confidence  字段文字内容置信度，内容为字段-字符置信度对,如code:0.9999。这个数值为字段中每个字符置信度，格式为fp32，保留四位。若字段不存在则返回0.0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'number' => 'string',
            'machinePrintedCode' => 'string',
            'machinePrintedNumber' => 'string',
            'issueDate' => 'string',
            'machineNumber' => 'string',
            'buyerName' => 'string',
            'buyerOrganizationNumber' => 'string',
            'buyerId' => 'string',
            'buyerAddress' => 'string',
            'buyerPhone' => 'string',
            'sellerName' => 'string',
            'sellerPhone' => 'string',
            'sellerId' => 'string',
            'sellerAccount' => 'string',
            'sellerAddress' => 'string',
            'licencePlateNumber' => 'string',
            'registrationNumber' => 'string',
            'deptMotorVehicles' => 'string',
            'sellerBank' => 'string',
            'vehicleType' => 'string',
            'brandModel' => 'string',
            'manufacturingLocation' => 'string',
            'qualityCertificate' => 'string',
            'importCertificate' => 'string',
            'inspectionNumber' => 'string',
            'engineNumber' => 'string',
            'vehicleIdentificationNumber' => 'string',
            'tonnage' => 'string',
            'seatingCapacity' => 'string',
            'taxAuthority' => 'string',
            'taxAuthorityCode' => 'string',
            'taxPaymentReceipt' => 'string',
            'taxRate' => 'string',
            'tax' => 'string',
            'taxExclusivePrice' => 'string',
            'total' => 'string',
            'totalChinese' => 'string',
            'fiscalCode' => 'string',
            'auctionOrgName' => 'string',
            'auctionOrgAddress' => 'string',
            'auctionOrgId' => 'string',
            'auctionOrgBankAccount' => 'string',
            'auctionOrgPhone' => 'string',
            'usedVehicleMarketName' => 'string',
            'usedVehicleMarketId' => 'string',
            'usedVehicleMarketAddress' => 'string',
            'usedVehicleMarketBankAccount' => 'string',
            'usedVehicleMarketPhone' => 'string',
            'remark' => 'string',
            'drawerName' => 'string',
            'type' => 'string',
            'textLocation' => 'object',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  发票代码。
    * number  发票号码。
    * machinePrintedCode  机打代码。
    * machinePrintedNumber  机打号码。
    * issueDate  开票日期。
    * machineNumber  机器编号。
    * buyerName  购买方名称、二手车买方单位/个人
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号、二手车买方单位代码/身份证号
    * buyerAddress  二手车买方单位/个人住址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * buyerPhone  二手车买方单位/个人电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerName  销货单位名称、二手车卖方单位/个人
    * sellerPhone  销售方电话、二手车卖方电话
    * sellerId  销售方纳税人识别号、二手车卖方单位代码/身份证号
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址、二手车卖方单位/个人地址
    * licencePlateNumber  二手车车牌照号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * registrationNumber  二手车登记证号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * deptMotorVehicles  二手车转入地车管所名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerBank  销售方开户行。
    * vehicleType  车辆类型。
    * brandModel  厂牌型号。
    * manufacturingLocation  产地。
    * qualityCertificate  合格证号。
    * importCertificate  进口证明书号。
    * inspectionNumber  商检单号。
    * engineNumber  发动机号码。
    * vehicleIdentificationNumber  车辆识别代号/车架号码。
    * tonnage  吨位。
    * seatingCapacity  限乘人数。
    * taxAuthority  主管税务机关。
    * taxAuthorityCode  主管税务机关代码。
    * taxPaymentReceipt  完税凭证号码。
    * taxRate  增值税税率或征收率。
    * tax  增值税税额。
    * taxExclusivePrice  不含税价。
    * total  价税合计、二手车车价合计（小写）
    * totalChinese  价税合计大写、二手车车价合计（大写）
    * fiscalCode  税控码。
    * auctionOrgName  二手车经营拍卖单位名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgAddress  二手车经营拍卖单位地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgId  二手车经营拍卖单位纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgBankAccount  二手车经营拍卖单位银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgPhone  二手车经营拍卖单位电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketName  二手车市场名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketId  二手车市场纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketAddress  二手车市场地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketBankAccount  二手车市场银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketPhone  二手车市场电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * remark  备注
    * drawerName  开票人
    * type  枚举值，机动车销售统一发票或者二手车销售统一发票。 当入参中包含type时返回。
    * textLocation  检测框对象，内部为字段-框坐标对。如 code:[[x0, y0],[x1,y1],[x2,y2],[x3,y3]], 点的顺序是左上角、右上角、右下角、左下角。如果原图找不到字段，返回空列表。
    * confidence  字段文字内容置信度，内容为字段-字符置信度对,如code:0.9999。这个数值为字段中每个字符置信度，格式为fp32，保留四位。若字段不存在则返回0.0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'number' => null,
        'machinePrintedCode' => null,
        'machinePrintedNumber' => null,
        'issueDate' => null,
        'machineNumber' => null,
        'buyerName' => null,
        'buyerOrganizationNumber' => null,
        'buyerId' => null,
        'buyerAddress' => null,
        'buyerPhone' => null,
        'sellerName' => null,
        'sellerPhone' => null,
        'sellerId' => null,
        'sellerAccount' => null,
        'sellerAddress' => null,
        'licencePlateNumber' => null,
        'registrationNumber' => null,
        'deptMotorVehicles' => null,
        'sellerBank' => null,
        'vehicleType' => null,
        'brandModel' => null,
        'manufacturingLocation' => null,
        'qualityCertificate' => null,
        'importCertificate' => null,
        'inspectionNumber' => null,
        'engineNumber' => null,
        'vehicleIdentificationNumber' => null,
        'tonnage' => null,
        'seatingCapacity' => null,
        'taxAuthority' => null,
        'taxAuthorityCode' => null,
        'taxPaymentReceipt' => null,
        'taxRate' => null,
        'tax' => null,
        'taxExclusivePrice' => null,
        'total' => null,
        'totalChinese' => null,
        'fiscalCode' => null,
        'auctionOrgName' => null,
        'auctionOrgAddress' => null,
        'auctionOrgId' => null,
        'auctionOrgBankAccount' => null,
        'auctionOrgPhone' => null,
        'usedVehicleMarketName' => null,
        'usedVehicleMarketId' => null,
        'usedVehicleMarketAddress' => null,
        'usedVehicleMarketBankAccount' => null,
        'usedVehicleMarketPhone' => null,
        'remark' => null,
        'drawerName' => null,
        'type' => null,
        'textLocation' => null,
        'confidence' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * code  发票代码。
    * number  发票号码。
    * machinePrintedCode  机打代码。
    * machinePrintedNumber  机打号码。
    * issueDate  开票日期。
    * machineNumber  机器编号。
    * buyerName  购买方名称、二手车买方单位/个人
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号、二手车买方单位代码/身份证号
    * buyerAddress  二手车买方单位/个人住址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * buyerPhone  二手车买方单位/个人电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerName  销货单位名称、二手车卖方单位/个人
    * sellerPhone  销售方电话、二手车卖方电话
    * sellerId  销售方纳税人识别号、二手车卖方单位代码/身份证号
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址、二手车卖方单位/个人地址
    * licencePlateNumber  二手车车牌照号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * registrationNumber  二手车登记证号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * deptMotorVehicles  二手车转入地车管所名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerBank  销售方开户行。
    * vehicleType  车辆类型。
    * brandModel  厂牌型号。
    * manufacturingLocation  产地。
    * qualityCertificate  合格证号。
    * importCertificate  进口证明书号。
    * inspectionNumber  商检单号。
    * engineNumber  发动机号码。
    * vehicleIdentificationNumber  车辆识别代号/车架号码。
    * tonnage  吨位。
    * seatingCapacity  限乘人数。
    * taxAuthority  主管税务机关。
    * taxAuthorityCode  主管税务机关代码。
    * taxPaymentReceipt  完税凭证号码。
    * taxRate  增值税税率或征收率。
    * tax  增值税税额。
    * taxExclusivePrice  不含税价。
    * total  价税合计、二手车车价合计（小写）
    * totalChinese  价税合计大写、二手车车价合计（大写）
    * fiscalCode  税控码。
    * auctionOrgName  二手车经营拍卖单位名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgAddress  二手车经营拍卖单位地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgId  二手车经营拍卖单位纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgBankAccount  二手车经营拍卖单位银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgPhone  二手车经营拍卖单位电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketName  二手车市场名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketId  二手车市场纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketAddress  二手车市场地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketBankAccount  二手车市场银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketPhone  二手车市场电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * remark  备注
    * drawerName  开票人
    * type  枚举值，机动车销售统一发票或者二手车销售统一发票。 当入参中包含type时返回。
    * textLocation  检测框对象，内部为字段-框坐标对。如 code:[[x0, y0],[x1,y1],[x2,y2],[x3,y3]], 点的顺序是左上角、右上角、右下角、左下角。如果原图找不到字段，返回空列表。
    * confidence  字段文字内容置信度，内容为字段-字符置信度对,如code:0.9999。这个数值为字段中每个字符置信度，格式为fp32，保留四位。若字段不存在则返回0.0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'number' => 'number',
            'machinePrintedCode' => 'machine_printed_code',
            'machinePrintedNumber' => 'machine_printed_number',
            'issueDate' => 'issue_date',
            'machineNumber' => 'machine_number',
            'buyerName' => 'buyer_name',
            'buyerOrganizationNumber' => 'buyer_organization_number',
            'buyerId' => 'buyer_id',
            'buyerAddress' => 'buyer_address',
            'buyerPhone' => 'buyer_phone',
            'sellerName' => 'seller_name',
            'sellerPhone' => 'seller_phone',
            'sellerId' => 'seller_id',
            'sellerAccount' => 'seller_account',
            'sellerAddress' => 'seller_address',
            'licencePlateNumber' => 'licence_plate_number',
            'registrationNumber' => 'registration_number',
            'deptMotorVehicles' => 'dept_motor_vehicles',
            'sellerBank' => 'seller_bank',
            'vehicleType' => 'vehicle_type',
            'brandModel' => 'brand_model',
            'manufacturingLocation' => 'manufacturing_location',
            'qualityCertificate' => 'quality_certificate',
            'importCertificate' => 'import_certificate',
            'inspectionNumber' => 'inspection_number',
            'engineNumber' => 'engine_number',
            'vehicleIdentificationNumber' => 'vehicle_identification_number',
            'tonnage' => 'tonnage',
            'seatingCapacity' => 'seating_capacity',
            'taxAuthority' => 'tax_authority',
            'taxAuthorityCode' => 'tax_authority_code',
            'taxPaymentReceipt' => 'tax_payment_receipt',
            'taxRate' => 'tax_rate',
            'tax' => 'tax',
            'taxExclusivePrice' => 'tax_exclusive_price',
            'total' => 'total',
            'totalChinese' => 'total_chinese',
            'fiscalCode' => 'fiscal_code',
            'auctionOrgName' => 'auction_org_name',
            'auctionOrgAddress' => 'auction_org_address',
            'auctionOrgId' => 'auction_org_id',
            'auctionOrgBankAccount' => 'auction_org_bank_account',
            'auctionOrgPhone' => 'auction_org_phone',
            'usedVehicleMarketName' => 'used_vehicle_market_name',
            'usedVehicleMarketId' => 'used_vehicle_market_id',
            'usedVehicleMarketAddress' => 'used_vehicle_market_address',
            'usedVehicleMarketBankAccount' => 'used_vehicle_market_bank_account',
            'usedVehicleMarketPhone' => 'used_vehicle_market_phone',
            'remark' => 'remark',
            'drawerName' => 'drawer_name',
            'type' => 'type',
            'textLocation' => 'text_location',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  发票代码。
    * number  发票号码。
    * machinePrintedCode  机打代码。
    * machinePrintedNumber  机打号码。
    * issueDate  开票日期。
    * machineNumber  机器编号。
    * buyerName  购买方名称、二手车买方单位/个人
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号、二手车买方单位代码/身份证号
    * buyerAddress  二手车买方单位/个人住址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * buyerPhone  二手车买方单位/个人电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerName  销货单位名称、二手车卖方单位/个人
    * sellerPhone  销售方电话、二手车卖方电话
    * sellerId  销售方纳税人识别号、二手车卖方单位代码/身份证号
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址、二手车卖方单位/个人地址
    * licencePlateNumber  二手车车牌照号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * registrationNumber  二手车登记证号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * deptMotorVehicles  二手车转入地车管所名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerBank  销售方开户行。
    * vehicleType  车辆类型。
    * brandModel  厂牌型号。
    * manufacturingLocation  产地。
    * qualityCertificate  合格证号。
    * importCertificate  进口证明书号。
    * inspectionNumber  商检单号。
    * engineNumber  发动机号码。
    * vehicleIdentificationNumber  车辆识别代号/车架号码。
    * tonnage  吨位。
    * seatingCapacity  限乘人数。
    * taxAuthority  主管税务机关。
    * taxAuthorityCode  主管税务机关代码。
    * taxPaymentReceipt  完税凭证号码。
    * taxRate  增值税税率或征收率。
    * tax  增值税税额。
    * taxExclusivePrice  不含税价。
    * total  价税合计、二手车车价合计（小写）
    * totalChinese  价税合计大写、二手车车价合计（大写）
    * fiscalCode  税控码。
    * auctionOrgName  二手车经营拍卖单位名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgAddress  二手车经营拍卖单位地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgId  二手车经营拍卖单位纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgBankAccount  二手车经营拍卖单位银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgPhone  二手车经营拍卖单位电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketName  二手车市场名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketId  二手车市场纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketAddress  二手车市场地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketBankAccount  二手车市场银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketPhone  二手车市场电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * remark  备注
    * drawerName  开票人
    * type  枚举值，机动车销售统一发票或者二手车销售统一发票。 当入参中包含type时返回。
    * textLocation  检测框对象，内部为字段-框坐标对。如 code:[[x0, y0],[x1,y1],[x2,y2],[x3,y3]], 点的顺序是左上角、右上角、右下角、左下角。如果原图找不到字段，返回空列表。
    * confidence  字段文字内容置信度，内容为字段-字符置信度对,如code:0.9999。这个数值为字段中每个字符置信度，格式为fp32，保留四位。若字段不存在则返回0.0。
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'number' => 'setNumber',
            'machinePrintedCode' => 'setMachinePrintedCode',
            'machinePrintedNumber' => 'setMachinePrintedNumber',
            'issueDate' => 'setIssueDate',
            'machineNumber' => 'setMachineNumber',
            'buyerName' => 'setBuyerName',
            'buyerOrganizationNumber' => 'setBuyerOrganizationNumber',
            'buyerId' => 'setBuyerId',
            'buyerAddress' => 'setBuyerAddress',
            'buyerPhone' => 'setBuyerPhone',
            'sellerName' => 'setSellerName',
            'sellerPhone' => 'setSellerPhone',
            'sellerId' => 'setSellerId',
            'sellerAccount' => 'setSellerAccount',
            'sellerAddress' => 'setSellerAddress',
            'licencePlateNumber' => 'setLicencePlateNumber',
            'registrationNumber' => 'setRegistrationNumber',
            'deptMotorVehicles' => 'setDeptMotorVehicles',
            'sellerBank' => 'setSellerBank',
            'vehicleType' => 'setVehicleType',
            'brandModel' => 'setBrandModel',
            'manufacturingLocation' => 'setManufacturingLocation',
            'qualityCertificate' => 'setQualityCertificate',
            'importCertificate' => 'setImportCertificate',
            'inspectionNumber' => 'setInspectionNumber',
            'engineNumber' => 'setEngineNumber',
            'vehicleIdentificationNumber' => 'setVehicleIdentificationNumber',
            'tonnage' => 'setTonnage',
            'seatingCapacity' => 'setSeatingCapacity',
            'taxAuthority' => 'setTaxAuthority',
            'taxAuthorityCode' => 'setTaxAuthorityCode',
            'taxPaymentReceipt' => 'setTaxPaymentReceipt',
            'taxRate' => 'setTaxRate',
            'tax' => 'setTax',
            'taxExclusivePrice' => 'setTaxExclusivePrice',
            'total' => 'setTotal',
            'totalChinese' => 'setTotalChinese',
            'fiscalCode' => 'setFiscalCode',
            'auctionOrgName' => 'setAuctionOrgName',
            'auctionOrgAddress' => 'setAuctionOrgAddress',
            'auctionOrgId' => 'setAuctionOrgId',
            'auctionOrgBankAccount' => 'setAuctionOrgBankAccount',
            'auctionOrgPhone' => 'setAuctionOrgPhone',
            'usedVehicleMarketName' => 'setUsedVehicleMarketName',
            'usedVehicleMarketId' => 'setUsedVehicleMarketId',
            'usedVehicleMarketAddress' => 'setUsedVehicleMarketAddress',
            'usedVehicleMarketBankAccount' => 'setUsedVehicleMarketBankAccount',
            'usedVehicleMarketPhone' => 'setUsedVehicleMarketPhone',
            'remark' => 'setRemark',
            'drawerName' => 'setDrawerName',
            'type' => 'setType',
            'textLocation' => 'setTextLocation',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  发票代码。
    * number  发票号码。
    * machinePrintedCode  机打代码。
    * machinePrintedNumber  机打号码。
    * issueDate  开票日期。
    * machineNumber  机器编号。
    * buyerName  购买方名称、二手车买方单位/个人
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号、二手车买方单位代码/身份证号
    * buyerAddress  二手车买方单位/个人住址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * buyerPhone  二手车买方单位/个人电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerName  销货单位名称、二手车卖方单位/个人
    * sellerPhone  销售方电话、二手车卖方电话
    * sellerId  销售方纳税人识别号、二手车卖方单位代码/身份证号
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址、二手车卖方单位/个人地址
    * licencePlateNumber  二手车车牌照号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * registrationNumber  二手车登记证号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * deptMotorVehicles  二手车转入地车管所名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * sellerBank  销售方开户行。
    * vehicleType  车辆类型。
    * brandModel  厂牌型号。
    * manufacturingLocation  产地。
    * qualityCertificate  合格证号。
    * importCertificate  进口证明书号。
    * inspectionNumber  商检单号。
    * engineNumber  发动机号码。
    * vehicleIdentificationNumber  车辆识别代号/车架号码。
    * tonnage  吨位。
    * seatingCapacity  限乘人数。
    * taxAuthority  主管税务机关。
    * taxAuthorityCode  主管税务机关代码。
    * taxPaymentReceipt  完税凭证号码。
    * taxRate  增值税税率或征收率。
    * tax  增值税税额。
    * taxExclusivePrice  不含税价。
    * total  价税合计、二手车车价合计（小写）
    * totalChinese  价税合计大写、二手车车价合计（大写）
    * fiscalCode  税控码。
    * auctionOrgName  二手车经营拍卖单位名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgAddress  二手车经营拍卖单位地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgId  二手车经营拍卖单位纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgBankAccount  二手车经营拍卖单位银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * auctionOrgPhone  二手车经营拍卖单位电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketName  二手车市场名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketId  二手车市场纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketAddress  二手车市场地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketBankAccount  二手车市场银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * usedVehicleMarketPhone  二手车市场电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    * remark  备注
    * drawerName  开票人
    * type  枚举值，机动车销售统一发票或者二手车销售统一发票。 当入参中包含type时返回。
    * textLocation  检测框对象，内部为字段-框坐标对。如 code:[[x0, y0],[x1,y1],[x2,y2],[x3,y3]], 点的顺序是左上角、右上角、右下角、左下角。如果原图找不到字段，返回空列表。
    * confidence  字段文字内容置信度，内容为字段-字符置信度对,如code:0.9999。这个数值为字段中每个字符置信度，格式为fp32，保留四位。若字段不存在则返回0.0。
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'number' => 'getNumber',
            'machinePrintedCode' => 'getMachinePrintedCode',
            'machinePrintedNumber' => 'getMachinePrintedNumber',
            'issueDate' => 'getIssueDate',
            'machineNumber' => 'getMachineNumber',
            'buyerName' => 'getBuyerName',
            'buyerOrganizationNumber' => 'getBuyerOrganizationNumber',
            'buyerId' => 'getBuyerId',
            'buyerAddress' => 'getBuyerAddress',
            'buyerPhone' => 'getBuyerPhone',
            'sellerName' => 'getSellerName',
            'sellerPhone' => 'getSellerPhone',
            'sellerId' => 'getSellerId',
            'sellerAccount' => 'getSellerAccount',
            'sellerAddress' => 'getSellerAddress',
            'licencePlateNumber' => 'getLicencePlateNumber',
            'registrationNumber' => 'getRegistrationNumber',
            'deptMotorVehicles' => 'getDeptMotorVehicles',
            'sellerBank' => 'getSellerBank',
            'vehicleType' => 'getVehicleType',
            'brandModel' => 'getBrandModel',
            'manufacturingLocation' => 'getManufacturingLocation',
            'qualityCertificate' => 'getQualityCertificate',
            'importCertificate' => 'getImportCertificate',
            'inspectionNumber' => 'getInspectionNumber',
            'engineNumber' => 'getEngineNumber',
            'vehicleIdentificationNumber' => 'getVehicleIdentificationNumber',
            'tonnage' => 'getTonnage',
            'seatingCapacity' => 'getSeatingCapacity',
            'taxAuthority' => 'getTaxAuthority',
            'taxAuthorityCode' => 'getTaxAuthorityCode',
            'taxPaymentReceipt' => 'getTaxPaymentReceipt',
            'taxRate' => 'getTaxRate',
            'tax' => 'getTax',
            'taxExclusivePrice' => 'getTaxExclusivePrice',
            'total' => 'getTotal',
            'totalChinese' => 'getTotalChinese',
            'fiscalCode' => 'getFiscalCode',
            'auctionOrgName' => 'getAuctionOrgName',
            'auctionOrgAddress' => 'getAuctionOrgAddress',
            'auctionOrgId' => 'getAuctionOrgId',
            'auctionOrgBankAccount' => 'getAuctionOrgBankAccount',
            'auctionOrgPhone' => 'getAuctionOrgPhone',
            'usedVehicleMarketName' => 'getUsedVehicleMarketName',
            'usedVehicleMarketId' => 'getUsedVehicleMarketId',
            'usedVehicleMarketAddress' => 'getUsedVehicleMarketAddress',
            'usedVehicleMarketBankAccount' => 'getUsedVehicleMarketBankAccount',
            'usedVehicleMarketPhone' => 'getUsedVehicleMarketPhone',
            'remark' => 'getRemark',
            'drawerName' => 'getDrawerName',
            'type' => 'getType',
            'textLocation' => 'getTextLocation',
            'confidence' => 'getConfidence'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['machinePrintedCode'] = isset($data['machinePrintedCode']) ? $data['machinePrintedCode'] : null;
        $this->container['machinePrintedNumber'] = isset($data['machinePrintedNumber']) ? $data['machinePrintedNumber'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['machineNumber'] = isset($data['machineNumber']) ? $data['machineNumber'] : null;
        $this->container['buyerName'] = isset($data['buyerName']) ? $data['buyerName'] : null;
        $this->container['buyerOrganizationNumber'] = isset($data['buyerOrganizationNumber']) ? $data['buyerOrganizationNumber'] : null;
        $this->container['buyerId'] = isset($data['buyerId']) ? $data['buyerId'] : null;
        $this->container['buyerAddress'] = isset($data['buyerAddress']) ? $data['buyerAddress'] : null;
        $this->container['buyerPhone'] = isset($data['buyerPhone']) ? $data['buyerPhone'] : null;
        $this->container['sellerName'] = isset($data['sellerName']) ? $data['sellerName'] : null;
        $this->container['sellerPhone'] = isset($data['sellerPhone']) ? $data['sellerPhone'] : null;
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['sellerAccount'] = isset($data['sellerAccount']) ? $data['sellerAccount'] : null;
        $this->container['sellerAddress'] = isset($data['sellerAddress']) ? $data['sellerAddress'] : null;
        $this->container['licencePlateNumber'] = isset($data['licencePlateNumber']) ? $data['licencePlateNumber'] : null;
        $this->container['registrationNumber'] = isset($data['registrationNumber']) ? $data['registrationNumber'] : null;
        $this->container['deptMotorVehicles'] = isset($data['deptMotorVehicles']) ? $data['deptMotorVehicles'] : null;
        $this->container['sellerBank'] = isset($data['sellerBank']) ? $data['sellerBank'] : null;
        $this->container['vehicleType'] = isset($data['vehicleType']) ? $data['vehicleType'] : null;
        $this->container['brandModel'] = isset($data['brandModel']) ? $data['brandModel'] : null;
        $this->container['manufacturingLocation'] = isset($data['manufacturingLocation']) ? $data['manufacturingLocation'] : null;
        $this->container['qualityCertificate'] = isset($data['qualityCertificate']) ? $data['qualityCertificate'] : null;
        $this->container['importCertificate'] = isset($data['importCertificate']) ? $data['importCertificate'] : null;
        $this->container['inspectionNumber'] = isset($data['inspectionNumber']) ? $data['inspectionNumber'] : null;
        $this->container['engineNumber'] = isset($data['engineNumber']) ? $data['engineNumber'] : null;
        $this->container['vehicleIdentificationNumber'] = isset($data['vehicleIdentificationNumber']) ? $data['vehicleIdentificationNumber'] : null;
        $this->container['tonnage'] = isset($data['tonnage']) ? $data['tonnage'] : null;
        $this->container['seatingCapacity'] = isset($data['seatingCapacity']) ? $data['seatingCapacity'] : null;
        $this->container['taxAuthority'] = isset($data['taxAuthority']) ? $data['taxAuthority'] : null;
        $this->container['taxAuthorityCode'] = isset($data['taxAuthorityCode']) ? $data['taxAuthorityCode'] : null;
        $this->container['taxPaymentReceipt'] = isset($data['taxPaymentReceipt']) ? $data['taxPaymentReceipt'] : null;
        $this->container['taxRate'] = isset($data['taxRate']) ? $data['taxRate'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['taxExclusivePrice'] = isset($data['taxExclusivePrice']) ? $data['taxExclusivePrice'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalChinese'] = isset($data['totalChinese']) ? $data['totalChinese'] : null;
        $this->container['fiscalCode'] = isset($data['fiscalCode']) ? $data['fiscalCode'] : null;
        $this->container['auctionOrgName'] = isset($data['auctionOrgName']) ? $data['auctionOrgName'] : null;
        $this->container['auctionOrgAddress'] = isset($data['auctionOrgAddress']) ? $data['auctionOrgAddress'] : null;
        $this->container['auctionOrgId'] = isset($data['auctionOrgId']) ? $data['auctionOrgId'] : null;
        $this->container['auctionOrgBankAccount'] = isset($data['auctionOrgBankAccount']) ? $data['auctionOrgBankAccount'] : null;
        $this->container['auctionOrgPhone'] = isset($data['auctionOrgPhone']) ? $data['auctionOrgPhone'] : null;
        $this->container['usedVehicleMarketName'] = isset($data['usedVehicleMarketName']) ? $data['usedVehicleMarketName'] : null;
        $this->container['usedVehicleMarketId'] = isset($data['usedVehicleMarketId']) ? $data['usedVehicleMarketId'] : null;
        $this->container['usedVehicleMarketAddress'] = isset($data['usedVehicleMarketAddress']) ? $data['usedVehicleMarketAddress'] : null;
        $this->container['usedVehicleMarketBankAccount'] = isset($data['usedVehicleMarketBankAccount']) ? $data['usedVehicleMarketBankAccount'] : null;
        $this->container['usedVehicleMarketPhone'] = isset($data['usedVehicleMarketPhone']) ? $data['usedVehicleMarketPhone'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['drawerName'] = isset($data['drawerName']) ? $data['drawerName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets code
    *  发票代码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 发票代码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets number
    *  发票号码。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 发票号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets machinePrintedCode
    *  机打代码。
    *
    * @return string|null
    */
    public function getMachinePrintedCode()
    {
        return $this->container['machinePrintedCode'];
    }

    /**
    * Sets machinePrintedCode
    *
    * @param string|null $machinePrintedCode 机打代码。
    *
    * @return $this
    */
    public function setMachinePrintedCode($machinePrintedCode)
    {
        $this->container['machinePrintedCode'] = $machinePrintedCode;
        return $this;
    }

    /**
    * Gets machinePrintedNumber
    *  机打号码。
    *
    * @return string|null
    */
    public function getMachinePrintedNumber()
    {
        return $this->container['machinePrintedNumber'];
    }

    /**
    * Sets machinePrintedNumber
    *
    * @param string|null $machinePrintedNumber 机打号码。
    *
    * @return $this
    */
    public function setMachinePrintedNumber($machinePrintedNumber)
    {
        $this->container['machinePrintedNumber'] = $machinePrintedNumber;
        return $this;
    }

    /**
    * Gets issueDate
    *  开票日期。
    *
    * @return string|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param string|null $issueDate 开票日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets machineNumber
    *  机器编号。
    *
    * @return string|null
    */
    public function getMachineNumber()
    {
        return $this->container['machineNumber'];
    }

    /**
    * Sets machineNumber
    *
    * @param string|null $machineNumber 机器编号。
    *
    * @return $this
    */
    public function setMachineNumber($machineNumber)
    {
        $this->container['machineNumber'] = $machineNumber;
        return $this;
    }

    /**
    * Gets buyerName
    *  购买方名称、二手车买方单位/个人
    *
    * @return string|null
    */
    public function getBuyerName()
    {
        return $this->container['buyerName'];
    }

    /**
    * Sets buyerName
    *
    * @param string|null $buyerName 购买方名称、二手车买方单位/个人
    *
    * @return $this
    */
    public function setBuyerName($buyerName)
    {
        $this->container['buyerName'] = $buyerName;
        return $this;
    }

    /**
    * Gets buyerOrganizationNumber
    *  购买方身份证号码/组织机构代码。
    *
    * @return string|null
    */
    public function getBuyerOrganizationNumber()
    {
        return $this->container['buyerOrganizationNumber'];
    }

    /**
    * Sets buyerOrganizationNumber
    *
    * @param string|null $buyerOrganizationNumber 购买方身份证号码/组织机构代码。
    *
    * @return $this
    */
    public function setBuyerOrganizationNumber($buyerOrganizationNumber)
    {
        $this->container['buyerOrganizationNumber'] = $buyerOrganizationNumber;
        return $this;
    }

    /**
    * Gets buyerId
    *  购买方纳税人识别号、二手车买方单位代码/身份证号
    *
    * @return string|null
    */
    public function getBuyerId()
    {
        return $this->container['buyerId'];
    }

    /**
    * Sets buyerId
    *
    * @param string|null $buyerId 购买方纳税人识别号、二手车买方单位代码/身份证号
    *
    * @return $this
    */
    public function setBuyerId($buyerId)
    {
        $this->container['buyerId'] = $buyerId;
        return $this;
    }

    /**
    * Gets buyerAddress
    *  二手车买方单位/个人住址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getBuyerAddress()
    {
        return $this->container['buyerAddress'];
    }

    /**
    * Sets buyerAddress
    *
    * @param string|null $buyerAddress 二手车买方单位/个人住址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setBuyerAddress($buyerAddress)
    {
        $this->container['buyerAddress'] = $buyerAddress;
        return $this;
    }

    /**
    * Gets buyerPhone
    *  二手车买方单位/个人电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getBuyerPhone()
    {
        return $this->container['buyerPhone'];
    }

    /**
    * Sets buyerPhone
    *
    * @param string|null $buyerPhone 二手车买方单位/个人电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setBuyerPhone($buyerPhone)
    {
        $this->container['buyerPhone'] = $buyerPhone;
        return $this;
    }

    /**
    * Gets sellerName
    *  销货单位名称、二手车卖方单位/个人
    *
    * @return string|null
    */
    public function getSellerName()
    {
        return $this->container['sellerName'];
    }

    /**
    * Sets sellerName
    *
    * @param string|null $sellerName 销货单位名称、二手车卖方单位/个人
    *
    * @return $this
    */
    public function setSellerName($sellerName)
    {
        $this->container['sellerName'] = $sellerName;
        return $this;
    }

    /**
    * Gets sellerPhone
    *  销售方电话、二手车卖方电话
    *
    * @return string|null
    */
    public function getSellerPhone()
    {
        return $this->container['sellerPhone'];
    }

    /**
    * Sets sellerPhone
    *
    * @param string|null $sellerPhone 销售方电话、二手车卖方电话
    *
    * @return $this
    */
    public function setSellerPhone($sellerPhone)
    {
        $this->container['sellerPhone'] = $sellerPhone;
        return $this;
    }

    /**
    * Gets sellerId
    *  销售方纳税人识别号、二手车卖方单位代码/身份证号
    *
    * @return string|null
    */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
    * Sets sellerId
    *
    * @param string|null $sellerId 销售方纳税人识别号、二手车卖方单位代码/身份证号
    *
    * @return $this
    */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;
        return $this;
    }

    /**
    * Gets sellerAccount
    *  销售方账号。
    *
    * @return string|null
    */
    public function getSellerAccount()
    {
        return $this->container['sellerAccount'];
    }

    /**
    * Sets sellerAccount
    *
    * @param string|null $sellerAccount 销售方账号。
    *
    * @return $this
    */
    public function setSellerAccount($sellerAccount)
    {
        $this->container['sellerAccount'] = $sellerAccount;
        return $this;
    }

    /**
    * Gets sellerAddress
    *  销售方地址、二手车卖方单位/个人地址
    *
    * @return string|null
    */
    public function getSellerAddress()
    {
        return $this->container['sellerAddress'];
    }

    /**
    * Sets sellerAddress
    *
    * @param string|null $sellerAddress 销售方地址、二手车卖方单位/个人地址
    *
    * @return $this
    */
    public function setSellerAddress($sellerAddress)
    {
        $this->container['sellerAddress'] = $sellerAddress;
        return $this;
    }

    /**
    * Gets licencePlateNumber
    *  二手车车牌照号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getLicencePlateNumber()
    {
        return $this->container['licencePlateNumber'];
    }

    /**
    * Sets licencePlateNumber
    *
    * @param string|null $licencePlateNumber 二手车车牌照号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setLicencePlateNumber($licencePlateNumber)
    {
        $this->container['licencePlateNumber'] = $licencePlateNumber;
        return $this;
    }

    /**
    * Gets registrationNumber
    *  二手车登记证号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getRegistrationNumber()
    {
        return $this->container['registrationNumber'];
    }

    /**
    * Sets registrationNumber
    *
    * @param string|null $registrationNumber 二手车登记证号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->container['registrationNumber'] = $registrationNumber;
        return $this;
    }

    /**
    * Gets deptMotorVehicles
    *  二手车转入地车管所名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getDeptMotorVehicles()
    {
        return $this->container['deptMotorVehicles'];
    }

    /**
    * Sets deptMotorVehicles
    *
    * @param string|null $deptMotorVehicles 二手车转入地车管所名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setDeptMotorVehicles($deptMotorVehicles)
    {
        $this->container['deptMotorVehicles'] = $deptMotorVehicles;
        return $this;
    }

    /**
    * Gets sellerBank
    *  销售方开户行。
    *
    * @return string|null
    */
    public function getSellerBank()
    {
        return $this->container['sellerBank'];
    }

    /**
    * Sets sellerBank
    *
    * @param string|null $sellerBank 销售方开户行。
    *
    * @return $this
    */
    public function setSellerBank($sellerBank)
    {
        $this->container['sellerBank'] = $sellerBank;
        return $this;
    }

    /**
    * Gets vehicleType
    *  车辆类型。
    *
    * @return string|null
    */
    public function getVehicleType()
    {
        return $this->container['vehicleType'];
    }

    /**
    * Sets vehicleType
    *
    * @param string|null $vehicleType 车辆类型。
    *
    * @return $this
    */
    public function setVehicleType($vehicleType)
    {
        $this->container['vehicleType'] = $vehicleType;
        return $this;
    }

    /**
    * Gets brandModel
    *  厂牌型号。
    *
    * @return string|null
    */
    public function getBrandModel()
    {
        return $this->container['brandModel'];
    }

    /**
    * Sets brandModel
    *
    * @param string|null $brandModel 厂牌型号。
    *
    * @return $this
    */
    public function setBrandModel($brandModel)
    {
        $this->container['brandModel'] = $brandModel;
        return $this;
    }

    /**
    * Gets manufacturingLocation
    *  产地。
    *
    * @return string|null
    */
    public function getManufacturingLocation()
    {
        return $this->container['manufacturingLocation'];
    }

    /**
    * Sets manufacturingLocation
    *
    * @param string|null $manufacturingLocation 产地。
    *
    * @return $this
    */
    public function setManufacturingLocation($manufacturingLocation)
    {
        $this->container['manufacturingLocation'] = $manufacturingLocation;
        return $this;
    }

    /**
    * Gets qualityCertificate
    *  合格证号。
    *
    * @return string|null
    */
    public function getQualityCertificate()
    {
        return $this->container['qualityCertificate'];
    }

    /**
    * Sets qualityCertificate
    *
    * @param string|null $qualityCertificate 合格证号。
    *
    * @return $this
    */
    public function setQualityCertificate($qualityCertificate)
    {
        $this->container['qualityCertificate'] = $qualityCertificate;
        return $this;
    }

    /**
    * Gets importCertificate
    *  进口证明书号。
    *
    * @return string|null
    */
    public function getImportCertificate()
    {
        return $this->container['importCertificate'];
    }

    /**
    * Sets importCertificate
    *
    * @param string|null $importCertificate 进口证明书号。
    *
    * @return $this
    */
    public function setImportCertificate($importCertificate)
    {
        $this->container['importCertificate'] = $importCertificate;
        return $this;
    }

    /**
    * Gets inspectionNumber
    *  商检单号。
    *
    * @return string|null
    */
    public function getInspectionNumber()
    {
        return $this->container['inspectionNumber'];
    }

    /**
    * Sets inspectionNumber
    *
    * @param string|null $inspectionNumber 商检单号。
    *
    * @return $this
    */
    public function setInspectionNumber($inspectionNumber)
    {
        $this->container['inspectionNumber'] = $inspectionNumber;
        return $this;
    }

    /**
    * Gets engineNumber
    *  发动机号码。
    *
    * @return string|null
    */
    public function getEngineNumber()
    {
        return $this->container['engineNumber'];
    }

    /**
    * Sets engineNumber
    *
    * @param string|null $engineNumber 发动机号码。
    *
    * @return $this
    */
    public function setEngineNumber($engineNumber)
    {
        $this->container['engineNumber'] = $engineNumber;
        return $this;
    }

    /**
    * Gets vehicleIdentificationNumber
    *  车辆识别代号/车架号码。
    *
    * @return string|null
    */
    public function getVehicleIdentificationNumber()
    {
        return $this->container['vehicleIdentificationNumber'];
    }

    /**
    * Sets vehicleIdentificationNumber
    *
    * @param string|null $vehicleIdentificationNumber 车辆识别代号/车架号码。
    *
    * @return $this
    */
    public function setVehicleIdentificationNumber($vehicleIdentificationNumber)
    {
        $this->container['vehicleIdentificationNumber'] = $vehicleIdentificationNumber;
        return $this;
    }

    /**
    * Gets tonnage
    *  吨位。
    *
    * @return string|null
    */
    public function getTonnage()
    {
        return $this->container['tonnage'];
    }

    /**
    * Sets tonnage
    *
    * @param string|null $tonnage 吨位。
    *
    * @return $this
    */
    public function setTonnage($tonnage)
    {
        $this->container['tonnage'] = $tonnage;
        return $this;
    }

    /**
    * Gets seatingCapacity
    *  限乘人数。
    *
    * @return string|null
    */
    public function getSeatingCapacity()
    {
        return $this->container['seatingCapacity'];
    }

    /**
    * Sets seatingCapacity
    *
    * @param string|null $seatingCapacity 限乘人数。
    *
    * @return $this
    */
    public function setSeatingCapacity($seatingCapacity)
    {
        $this->container['seatingCapacity'] = $seatingCapacity;
        return $this;
    }

    /**
    * Gets taxAuthority
    *  主管税务机关。
    *
    * @return string|null
    */
    public function getTaxAuthority()
    {
        return $this->container['taxAuthority'];
    }

    /**
    * Sets taxAuthority
    *
    * @param string|null $taxAuthority 主管税务机关。
    *
    * @return $this
    */
    public function setTaxAuthority($taxAuthority)
    {
        $this->container['taxAuthority'] = $taxAuthority;
        return $this;
    }

    /**
    * Gets taxAuthorityCode
    *  主管税务机关代码。
    *
    * @return string|null
    */
    public function getTaxAuthorityCode()
    {
        return $this->container['taxAuthorityCode'];
    }

    /**
    * Sets taxAuthorityCode
    *
    * @param string|null $taxAuthorityCode 主管税务机关代码。
    *
    * @return $this
    */
    public function setTaxAuthorityCode($taxAuthorityCode)
    {
        $this->container['taxAuthorityCode'] = $taxAuthorityCode;
        return $this;
    }

    /**
    * Gets taxPaymentReceipt
    *  完税凭证号码。
    *
    * @return string|null
    */
    public function getTaxPaymentReceipt()
    {
        return $this->container['taxPaymentReceipt'];
    }

    /**
    * Sets taxPaymentReceipt
    *
    * @param string|null $taxPaymentReceipt 完税凭证号码。
    *
    * @return $this
    */
    public function setTaxPaymentReceipt($taxPaymentReceipt)
    {
        $this->container['taxPaymentReceipt'] = $taxPaymentReceipt;
        return $this;
    }

    /**
    * Gets taxRate
    *  增值税税率或征收率。
    *
    * @return string|null
    */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
    * Sets taxRate
    *
    * @param string|null $taxRate 增值税税率或征收率。
    *
    * @return $this
    */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;
        return $this;
    }

    /**
    * Gets tax
    *  增值税税额。
    *
    * @return string|null
    */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
    * Sets tax
    *
    * @param string|null $tax 增值税税额。
    *
    * @return $this
    */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;
        return $this;
    }

    /**
    * Gets taxExclusivePrice
    *  不含税价。
    *
    * @return string|null
    */
    public function getTaxExclusivePrice()
    {
        return $this->container['taxExclusivePrice'];
    }

    /**
    * Sets taxExclusivePrice
    *
    * @param string|null $taxExclusivePrice 不含税价。
    *
    * @return $this
    */
    public function setTaxExclusivePrice($taxExclusivePrice)
    {
        $this->container['taxExclusivePrice'] = $taxExclusivePrice;
        return $this;
    }

    /**
    * Gets total
    *  价税合计、二手车车价合计（小写）
    *
    * @return string|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param string|null $total 价税合计、二手车车价合计（小写）
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets totalChinese
    *  价税合计大写、二手车车价合计（大写）
    *
    * @return string|null
    */
    public function getTotalChinese()
    {
        return $this->container['totalChinese'];
    }

    /**
    * Sets totalChinese
    *
    * @param string|null $totalChinese 价税合计大写、二手车车价合计（大写）
    *
    * @return $this
    */
    public function setTotalChinese($totalChinese)
    {
        $this->container['totalChinese'] = $totalChinese;
        return $this;
    }

    /**
    * Gets fiscalCode
    *  税控码。
    *
    * @return string|null
    */
    public function getFiscalCode()
    {
        return $this->container['fiscalCode'];
    }

    /**
    * Sets fiscalCode
    *
    * @param string|null $fiscalCode 税控码。
    *
    * @return $this
    */
    public function setFiscalCode($fiscalCode)
    {
        $this->container['fiscalCode'] = $fiscalCode;
        return $this;
    }

    /**
    * Gets auctionOrgName
    *  二手车经营拍卖单位名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getAuctionOrgName()
    {
        return $this->container['auctionOrgName'];
    }

    /**
    * Sets auctionOrgName
    *
    * @param string|null $auctionOrgName 二手车经营拍卖单位名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setAuctionOrgName($auctionOrgName)
    {
        $this->container['auctionOrgName'] = $auctionOrgName;
        return $this;
    }

    /**
    * Gets auctionOrgAddress
    *  二手车经营拍卖单位地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getAuctionOrgAddress()
    {
        return $this->container['auctionOrgAddress'];
    }

    /**
    * Sets auctionOrgAddress
    *
    * @param string|null $auctionOrgAddress 二手车经营拍卖单位地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setAuctionOrgAddress($auctionOrgAddress)
    {
        $this->container['auctionOrgAddress'] = $auctionOrgAddress;
        return $this;
    }

    /**
    * Gets auctionOrgId
    *  二手车经营拍卖单位纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getAuctionOrgId()
    {
        return $this->container['auctionOrgId'];
    }

    /**
    * Sets auctionOrgId
    *
    * @param string|null $auctionOrgId 二手车经营拍卖单位纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setAuctionOrgId($auctionOrgId)
    {
        $this->container['auctionOrgId'] = $auctionOrgId;
        return $this;
    }

    /**
    * Gets auctionOrgBankAccount
    *  二手车经营拍卖单位银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getAuctionOrgBankAccount()
    {
        return $this->container['auctionOrgBankAccount'];
    }

    /**
    * Sets auctionOrgBankAccount
    *
    * @param string|null $auctionOrgBankAccount 二手车经营拍卖单位银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setAuctionOrgBankAccount($auctionOrgBankAccount)
    {
        $this->container['auctionOrgBankAccount'] = $auctionOrgBankAccount;
        return $this;
    }

    /**
    * Gets auctionOrgPhone
    *  二手车经营拍卖单位电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getAuctionOrgPhone()
    {
        return $this->container['auctionOrgPhone'];
    }

    /**
    * Sets auctionOrgPhone
    *
    * @param string|null $auctionOrgPhone 二手车经营拍卖单位电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setAuctionOrgPhone($auctionOrgPhone)
    {
        $this->container['auctionOrgPhone'] = $auctionOrgPhone;
        return $this;
    }

    /**
    * Gets usedVehicleMarketName
    *  二手车市场名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getUsedVehicleMarketName()
    {
        return $this->container['usedVehicleMarketName'];
    }

    /**
    * Sets usedVehicleMarketName
    *
    * @param string|null $usedVehicleMarketName 二手车市场名称。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setUsedVehicleMarketName($usedVehicleMarketName)
    {
        $this->container['usedVehicleMarketName'] = $usedVehicleMarketName;
        return $this;
    }

    /**
    * Gets usedVehicleMarketId
    *  二手车市场纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getUsedVehicleMarketId()
    {
        return $this->container['usedVehicleMarketId'];
    }

    /**
    * Sets usedVehicleMarketId
    *
    * @param string|null $usedVehicleMarketId 二手车市场纳税人识别号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setUsedVehicleMarketId($usedVehicleMarketId)
    {
        $this->container['usedVehicleMarketId'] = $usedVehicleMarketId;
        return $this;
    }

    /**
    * Gets usedVehicleMarketAddress
    *  二手车市场地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getUsedVehicleMarketAddress()
    {
        return $this->container['usedVehicleMarketAddress'];
    }

    /**
    * Sets usedVehicleMarketAddress
    *
    * @param string|null $usedVehicleMarketAddress 二手车市场地址。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setUsedVehicleMarketAddress($usedVehicleMarketAddress)
    {
        $this->container['usedVehicleMarketAddress'] = $usedVehicleMarketAddress;
        return $this;
    }

    /**
    * Gets usedVehicleMarketBankAccount
    *  二手车市场银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getUsedVehicleMarketBankAccount()
    {
        return $this->container['usedVehicleMarketBankAccount'];
    }

    /**
    * Sets usedVehicleMarketBankAccount
    *
    * @param string|null $usedVehicleMarketBankAccount 二手车市场银行和账号。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setUsedVehicleMarketBankAccount($usedVehicleMarketBankAccount)
    {
        $this->container['usedVehicleMarketBankAccount'] = $usedVehicleMarketBankAccount;
        return $this;
    }

    /**
    * Gets usedVehicleMarketPhone
    *  二手车市场电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return string|null
    */
    public function getUsedVehicleMarketPhone()
    {
        return $this->container['usedVehicleMarketPhone'];
    }

    /**
    * Sets usedVehicleMarketPhone
    *
    * @param string|null $usedVehicleMarketPhone 二手车市场电话。 当请求参数\"tpye\"设置为\"auto\"或“used”时才返回。
    *
    * @return $this
    */
    public function setUsedVehicleMarketPhone($usedVehicleMarketPhone)
    {
        $this->container['usedVehicleMarketPhone'] = $usedVehicleMarketPhone;
        return $this;
    }

    /**
    * Gets remark
    *  备注
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备注
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets drawerName
    *  开票人
    *
    * @return string|null
    */
    public function getDrawerName()
    {
        return $this->container['drawerName'];
    }

    /**
    * Sets drawerName
    *
    * @param string|null $drawerName 开票人
    *
    * @return $this
    */
    public function setDrawerName($drawerName)
    {
        $this->container['drawerName'] = $drawerName;
        return $this;
    }

    /**
    * Gets type
    *  枚举值，机动车销售统一发票或者二手车销售统一发票。 当入参中包含type时返回。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 枚举值，机动车销售统一发票或者二手车销售统一发票。 当入参中包含type时返回。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets textLocation
    *  检测框对象，内部为字段-框坐标对。如 code:[[x0, y0],[x1,y1],[x2,y2],[x3,y3]], 点的顺序是左上角、右上角、右下角、左下角。如果原图找不到字段，返回空列表。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 检测框对象，内部为字段-框坐标对。如 code:[[x0, y0],[x1,y1],[x2,y2],[x3,y3]], 点的顺序是左上角、右上角、右下角、左下角。如果原图找不到字段，返回空列表。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Gets confidence
    *  字段文字内容置信度，内容为字段-字符置信度对,如code:0.9999。这个数值为字段中每个字符置信度，格式为fp32，保留四位。若字段不存在则返回0.0。
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 字段文字内容置信度，内容为字段-字符置信度对,如code:0.9999。这个数值为字段中每个字符置信度，格式为fp32，保留四位。若字段不存在则返回0.0。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

