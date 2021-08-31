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
    * buyerName  购买方名称。
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号。
    * sellerName  销货单位名称。
    * sellerPhone  销售方电话。
    * sellerId  销售方纳税人识别号。
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址。
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
    * total  价税合计。
    * totalChinese  价税合计大写。
    * fiscalCode  税控码。
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
            'sellerName' => 'string',
            'sellerPhone' => 'string',
            'sellerId' => 'string',
            'sellerAccount' => 'string',
            'sellerAddress' => 'string',
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
            'fiscalCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  发票代码。
    * number  发票号码。
    * machinePrintedCode  机打代码。
    * machinePrintedNumber  机打号码。
    * issueDate  开票日期。
    * machineNumber  机器编号。
    * buyerName  购买方名称。
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号。
    * sellerName  销货单位名称。
    * sellerPhone  销售方电话。
    * sellerId  销售方纳税人识别号。
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址。
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
    * total  价税合计。
    * totalChinese  价税合计大写。
    * fiscalCode  税控码。
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
        'sellerName' => null,
        'sellerPhone' => null,
        'sellerId' => null,
        'sellerAccount' => null,
        'sellerAddress' => null,
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
        'fiscalCode' => null
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
    * buyerName  购买方名称。
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号。
    * sellerName  销货单位名称。
    * sellerPhone  销售方电话。
    * sellerId  销售方纳税人识别号。
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址。
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
    * total  价税合计。
    * totalChinese  价税合计大写。
    * fiscalCode  税控码。
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
            'sellerName' => 'seller_name',
            'sellerPhone' => 'seller_phone',
            'sellerId' => 'seller_id',
            'sellerAccount' => 'seller_account',
            'sellerAddress' => 'seller_address',
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
            'fiscalCode' => 'fiscal_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  发票代码。
    * number  发票号码。
    * machinePrintedCode  机打代码。
    * machinePrintedNumber  机打号码。
    * issueDate  开票日期。
    * machineNumber  机器编号。
    * buyerName  购买方名称。
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号。
    * sellerName  销货单位名称。
    * sellerPhone  销售方电话。
    * sellerId  销售方纳税人识别号。
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址。
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
    * total  价税合计。
    * totalChinese  价税合计大写。
    * fiscalCode  税控码。
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
            'sellerName' => 'setSellerName',
            'sellerPhone' => 'setSellerPhone',
            'sellerId' => 'setSellerId',
            'sellerAccount' => 'setSellerAccount',
            'sellerAddress' => 'setSellerAddress',
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
            'fiscalCode' => 'setFiscalCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  发票代码。
    * number  发票号码。
    * machinePrintedCode  机打代码。
    * machinePrintedNumber  机打号码。
    * issueDate  开票日期。
    * machineNumber  机器编号。
    * buyerName  购买方名称。
    * buyerOrganizationNumber  购买方身份证号码/组织机构代码。
    * buyerId  购买方纳税人识别号。
    * sellerName  销货单位名称。
    * sellerPhone  销售方电话。
    * sellerId  销售方纳税人识别号。
    * sellerAccount  销售方账号。
    * sellerAddress  销售方地址。
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
    * total  价税合计。
    * totalChinese  价税合计大写。
    * fiscalCode  税控码。
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
            'sellerName' => 'getSellerName',
            'sellerPhone' => 'getSellerPhone',
            'sellerId' => 'getSellerId',
            'sellerAccount' => 'getSellerAccount',
            'sellerAddress' => 'getSellerAddress',
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
            'fiscalCode' => 'getFiscalCode'
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
        $this->container['sellerName'] = isset($data['sellerName']) ? $data['sellerName'] : null;
        $this->container['sellerPhone'] = isset($data['sellerPhone']) ? $data['sellerPhone'] : null;
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['sellerAccount'] = isset($data['sellerAccount']) ? $data['sellerAccount'] : null;
        $this->container['sellerAddress'] = isset($data['sellerAddress']) ? $data['sellerAddress'] : null;
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
    *  购买方名称。
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
    * @param string|null $buyerName 购买方名称。
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
    *  购买方纳税人识别号。
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
    * @param string|null $buyerId 购买方纳税人识别号。
    *
    * @return $this
    */
    public function setBuyerId($buyerId)
    {
        $this->container['buyerId'] = $buyerId;
        return $this;
    }

    /**
    * Gets sellerName
    *  销货单位名称。
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
    * @param string|null $sellerName 销货单位名称。
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
    *  销售方电话。
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
    * @param string|null $sellerPhone 销售方电话。
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
    *  销售方纳税人识别号。
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
    * @param string|null $sellerId 销售方纳税人识别号。
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
    *  销售方地址。
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
    * @param string|null $sellerAddress 销售方地址。
    *
    * @return $this
    */
    public function setSellerAddress($sellerAddress)
    {
        $this->container['sellerAddress'] = $sellerAddress;
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
    *  价税合计。
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
    * @param string|null $total 价税合计。
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
    *  价税合计大写。
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
    * @param string|null $totalChinese 价税合计大写。
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

