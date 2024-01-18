<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlightItineraryResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlightItineraryResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serialNumber  印刷序号。
    * passengerName  旅客姓名。
    * idNumber  有效身份证件号码。
    * endorsementsRestrictions  备注。
    * orderNumber  订单号。
    * fare  票价。
    * caacDevelopmentFund  民航（CAAC)发展基金。
    * fuelSurcharge  燃油附加费。
    * otherTaxes  其他税费。
    * total  合计。
    * eTicketNumber  电子客票号码。
    * checkCode  验证码。
    * referenceInformation  提示信息。
    * insurance  保险费。
    * agentCode  销售单位代号。
    * issueOrganization  填开单位。
    * issueDate  填开日期。
    * tax  增值税税额
    * taxRate  增值税税率
    * buyerName  购买方名称
    * buyerId  购买方纳税人识别号
    * number  发票号码
    * internationalFlag  国内国际标签
    * issueStatus  开具状态
    * itineraryList  机票行程列表。
    * confidence  相关字段的置信度信息，取值范围0~1。  置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。  > 说明：  - （1）置信度中的相关字段均与返回值中的相关字段一一对应；  - （2）置信度中的itinerary_list的顺序与返回值中的itinerary_list的顺序是一致的。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serialNumber' => 'string',
            'passengerName' => 'string',
            'idNumber' => 'string',
            'endorsementsRestrictions' => 'string',
            'orderNumber' => 'string',
            'fare' => 'string',
            'caacDevelopmentFund' => 'string',
            'fuelSurcharge' => 'string',
            'otherTaxes' => 'string',
            'total' => 'string',
            'eTicketNumber' => 'string',
            'checkCode' => 'string',
            'referenceInformation' => 'string',
            'insurance' => 'string',
            'agentCode' => 'string',
            'issueOrganization' => 'string',
            'issueDate' => 'string',
            'tax' => 'string',
            'taxRate' => 'string',
            'buyerName' => 'string',
            'buyerId' => 'string',
            'number' => 'string',
            'internationalFlag' => 'string',
            'issueStatus' => 'string',
            'itineraryList' => '\HuaweiCloud\SDK\Ocr\V1\Model\ItineraryList[]',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serialNumber  印刷序号。
    * passengerName  旅客姓名。
    * idNumber  有效身份证件号码。
    * endorsementsRestrictions  备注。
    * orderNumber  订单号。
    * fare  票价。
    * caacDevelopmentFund  民航（CAAC)发展基金。
    * fuelSurcharge  燃油附加费。
    * otherTaxes  其他税费。
    * total  合计。
    * eTicketNumber  电子客票号码。
    * checkCode  验证码。
    * referenceInformation  提示信息。
    * insurance  保险费。
    * agentCode  销售单位代号。
    * issueOrganization  填开单位。
    * issueDate  填开日期。
    * tax  增值税税额
    * taxRate  增值税税率
    * buyerName  购买方名称
    * buyerId  购买方纳税人识别号
    * number  发票号码
    * internationalFlag  国内国际标签
    * issueStatus  开具状态
    * itineraryList  机票行程列表。
    * confidence  相关字段的置信度信息，取值范围0~1。  置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。  > 说明：  - （1）置信度中的相关字段均与返回值中的相关字段一一对应；  - （2）置信度中的itinerary_list的顺序与返回值中的itinerary_list的顺序是一致的。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serialNumber' => null,
        'passengerName' => null,
        'idNumber' => null,
        'endorsementsRestrictions' => null,
        'orderNumber' => null,
        'fare' => null,
        'caacDevelopmentFund' => null,
        'fuelSurcharge' => null,
        'otherTaxes' => null,
        'total' => null,
        'eTicketNumber' => null,
        'checkCode' => null,
        'referenceInformation' => null,
        'insurance' => null,
        'agentCode' => null,
        'issueOrganization' => null,
        'issueDate' => null,
        'tax' => null,
        'taxRate' => null,
        'buyerName' => null,
        'buyerId' => null,
        'number' => null,
        'internationalFlag' => null,
        'issueStatus' => null,
        'itineraryList' => null,
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
    * serialNumber  印刷序号。
    * passengerName  旅客姓名。
    * idNumber  有效身份证件号码。
    * endorsementsRestrictions  备注。
    * orderNumber  订单号。
    * fare  票价。
    * caacDevelopmentFund  民航（CAAC)发展基金。
    * fuelSurcharge  燃油附加费。
    * otherTaxes  其他税费。
    * total  合计。
    * eTicketNumber  电子客票号码。
    * checkCode  验证码。
    * referenceInformation  提示信息。
    * insurance  保险费。
    * agentCode  销售单位代号。
    * issueOrganization  填开单位。
    * issueDate  填开日期。
    * tax  增值税税额
    * taxRate  增值税税率
    * buyerName  购买方名称
    * buyerId  购买方纳税人识别号
    * number  发票号码
    * internationalFlag  国内国际标签
    * issueStatus  开具状态
    * itineraryList  机票行程列表。
    * confidence  相关字段的置信度信息，取值范围0~1。  置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。  > 说明：  - （1）置信度中的相关字段均与返回值中的相关字段一一对应；  - （2）置信度中的itinerary_list的顺序与返回值中的itinerary_list的顺序是一致的。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serialNumber' => 'serial_number',
            'passengerName' => 'passenger_name',
            'idNumber' => 'id_number',
            'endorsementsRestrictions' => 'endorsements_restrictions',
            'orderNumber' => 'order_number',
            'fare' => 'fare',
            'caacDevelopmentFund' => 'caac_development_fund',
            'fuelSurcharge' => 'fuel_surcharge',
            'otherTaxes' => 'other_taxes',
            'total' => 'total',
            'eTicketNumber' => 'e_ticket_number',
            'checkCode' => 'check_code',
            'referenceInformation' => 'reference_information',
            'insurance' => 'insurance',
            'agentCode' => 'agent_code',
            'issueOrganization' => 'issue_organization',
            'issueDate' => 'issue_date',
            'tax' => 'tax',
            'taxRate' => 'tax_rate',
            'buyerName' => 'buyer_name',
            'buyerId' => 'buyer_id',
            'number' => 'number',
            'internationalFlag' => 'international_flag',
            'issueStatus' => 'issue_status',
            'itineraryList' => 'itinerary_list',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serialNumber  印刷序号。
    * passengerName  旅客姓名。
    * idNumber  有效身份证件号码。
    * endorsementsRestrictions  备注。
    * orderNumber  订单号。
    * fare  票价。
    * caacDevelopmentFund  民航（CAAC)发展基金。
    * fuelSurcharge  燃油附加费。
    * otherTaxes  其他税费。
    * total  合计。
    * eTicketNumber  电子客票号码。
    * checkCode  验证码。
    * referenceInformation  提示信息。
    * insurance  保险费。
    * agentCode  销售单位代号。
    * issueOrganization  填开单位。
    * issueDate  填开日期。
    * tax  增值税税额
    * taxRate  增值税税率
    * buyerName  购买方名称
    * buyerId  购买方纳税人识别号
    * number  发票号码
    * internationalFlag  国内国际标签
    * issueStatus  开具状态
    * itineraryList  机票行程列表。
    * confidence  相关字段的置信度信息，取值范围0~1。  置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。  > 说明：  - （1）置信度中的相关字段均与返回值中的相关字段一一对应；  - （2）置信度中的itinerary_list的顺序与返回值中的itinerary_list的顺序是一致的。
    *
    * @var string[]
    */
    protected static $setters = [
            'serialNumber' => 'setSerialNumber',
            'passengerName' => 'setPassengerName',
            'idNumber' => 'setIdNumber',
            'endorsementsRestrictions' => 'setEndorsementsRestrictions',
            'orderNumber' => 'setOrderNumber',
            'fare' => 'setFare',
            'caacDevelopmentFund' => 'setCaacDevelopmentFund',
            'fuelSurcharge' => 'setFuelSurcharge',
            'otherTaxes' => 'setOtherTaxes',
            'total' => 'setTotal',
            'eTicketNumber' => 'setETicketNumber',
            'checkCode' => 'setCheckCode',
            'referenceInformation' => 'setReferenceInformation',
            'insurance' => 'setInsurance',
            'agentCode' => 'setAgentCode',
            'issueOrganization' => 'setIssueOrganization',
            'issueDate' => 'setIssueDate',
            'tax' => 'setTax',
            'taxRate' => 'setTaxRate',
            'buyerName' => 'setBuyerName',
            'buyerId' => 'setBuyerId',
            'number' => 'setNumber',
            'internationalFlag' => 'setInternationalFlag',
            'issueStatus' => 'setIssueStatus',
            'itineraryList' => 'setItineraryList',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serialNumber  印刷序号。
    * passengerName  旅客姓名。
    * idNumber  有效身份证件号码。
    * endorsementsRestrictions  备注。
    * orderNumber  订单号。
    * fare  票价。
    * caacDevelopmentFund  民航（CAAC)发展基金。
    * fuelSurcharge  燃油附加费。
    * otherTaxes  其他税费。
    * total  合计。
    * eTicketNumber  电子客票号码。
    * checkCode  验证码。
    * referenceInformation  提示信息。
    * insurance  保险费。
    * agentCode  销售单位代号。
    * issueOrganization  填开单位。
    * issueDate  填开日期。
    * tax  增值税税额
    * taxRate  增值税税率
    * buyerName  购买方名称
    * buyerId  购买方纳税人识别号
    * number  发票号码
    * internationalFlag  国内国际标签
    * issueStatus  开具状态
    * itineraryList  机票行程列表。
    * confidence  相关字段的置信度信息，取值范围0~1。  置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。  > 说明：  - （1）置信度中的相关字段均与返回值中的相关字段一一对应；  - （2）置信度中的itinerary_list的顺序与返回值中的itinerary_list的顺序是一致的。
    *
    * @var string[]
    */
    protected static $getters = [
            'serialNumber' => 'getSerialNumber',
            'passengerName' => 'getPassengerName',
            'idNumber' => 'getIdNumber',
            'endorsementsRestrictions' => 'getEndorsementsRestrictions',
            'orderNumber' => 'getOrderNumber',
            'fare' => 'getFare',
            'caacDevelopmentFund' => 'getCaacDevelopmentFund',
            'fuelSurcharge' => 'getFuelSurcharge',
            'otherTaxes' => 'getOtherTaxes',
            'total' => 'getTotal',
            'eTicketNumber' => 'getETicketNumber',
            'checkCode' => 'getCheckCode',
            'referenceInformation' => 'getReferenceInformation',
            'insurance' => 'getInsurance',
            'agentCode' => 'getAgentCode',
            'issueOrganization' => 'getIssueOrganization',
            'issueDate' => 'getIssueDate',
            'tax' => 'getTax',
            'taxRate' => 'getTaxRate',
            'buyerName' => 'getBuyerName',
            'buyerId' => 'getBuyerId',
            'number' => 'getNumber',
            'internationalFlag' => 'getInternationalFlag',
            'issueStatus' => 'getIssueStatus',
            'itineraryList' => 'getItineraryList',
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
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['passengerName'] = isset($data['passengerName']) ? $data['passengerName'] : null;
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['endorsementsRestrictions'] = isset($data['endorsementsRestrictions']) ? $data['endorsementsRestrictions'] : null;
        $this->container['orderNumber'] = isset($data['orderNumber']) ? $data['orderNumber'] : null;
        $this->container['fare'] = isset($data['fare']) ? $data['fare'] : null;
        $this->container['caacDevelopmentFund'] = isset($data['caacDevelopmentFund']) ? $data['caacDevelopmentFund'] : null;
        $this->container['fuelSurcharge'] = isset($data['fuelSurcharge']) ? $data['fuelSurcharge'] : null;
        $this->container['otherTaxes'] = isset($data['otherTaxes']) ? $data['otherTaxes'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['eTicketNumber'] = isset($data['eTicketNumber']) ? $data['eTicketNumber'] : null;
        $this->container['checkCode'] = isset($data['checkCode']) ? $data['checkCode'] : null;
        $this->container['referenceInformation'] = isset($data['referenceInformation']) ? $data['referenceInformation'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['agentCode'] = isset($data['agentCode']) ? $data['agentCode'] : null;
        $this->container['issueOrganization'] = isset($data['issueOrganization']) ? $data['issueOrganization'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['taxRate'] = isset($data['taxRate']) ? $data['taxRate'] : null;
        $this->container['buyerName'] = isset($data['buyerName']) ? $data['buyerName'] : null;
        $this->container['buyerId'] = isset($data['buyerId']) ? $data['buyerId'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['internationalFlag'] = isset($data['internationalFlag']) ? $data['internationalFlag'] : null;
        $this->container['issueStatus'] = isset($data['issueStatus']) ? $data['issueStatus'] : null;
        $this->container['itineraryList'] = isset($data['itineraryList']) ? $data['itineraryList'] : null;
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
    * Gets serialNumber
    *  印刷序号。
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 印刷序号。
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets passengerName
    *  旅客姓名。
    *
    * @return string|null
    */
    public function getPassengerName()
    {
        return $this->container['passengerName'];
    }

    /**
    * Sets passengerName
    *
    * @param string|null $passengerName 旅客姓名。
    *
    * @return $this
    */
    public function setPassengerName($passengerName)
    {
        $this->container['passengerName'] = $passengerName;
        return $this;
    }

    /**
    * Gets idNumber
    *  有效身份证件号码。
    *
    * @return string|null
    */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
    * Sets idNumber
    *
    * @param string|null $idNumber 有效身份证件号码。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets endorsementsRestrictions
    *  备注。
    *
    * @return string|null
    */
    public function getEndorsementsRestrictions()
    {
        return $this->container['endorsementsRestrictions'];
    }

    /**
    * Sets endorsementsRestrictions
    *
    * @param string|null $endorsementsRestrictions 备注。
    *
    * @return $this
    */
    public function setEndorsementsRestrictions($endorsementsRestrictions)
    {
        $this->container['endorsementsRestrictions'] = $endorsementsRestrictions;
        return $this;
    }

    /**
    * Gets orderNumber
    *  订单号。
    *
    * @return string|null
    */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
    * Sets orderNumber
    *
    * @param string|null $orderNumber 订单号。
    *
    * @return $this
    */
    public function setOrderNumber($orderNumber)
    {
        $this->container['orderNumber'] = $orderNumber;
        return $this;
    }

    /**
    * Gets fare
    *  票价。
    *
    * @return string|null
    */
    public function getFare()
    {
        return $this->container['fare'];
    }

    /**
    * Sets fare
    *
    * @param string|null $fare 票价。
    *
    * @return $this
    */
    public function setFare($fare)
    {
        $this->container['fare'] = $fare;
        return $this;
    }

    /**
    * Gets caacDevelopmentFund
    *  民航（CAAC)发展基金。
    *
    * @return string|null
    */
    public function getCaacDevelopmentFund()
    {
        return $this->container['caacDevelopmentFund'];
    }

    /**
    * Sets caacDevelopmentFund
    *
    * @param string|null $caacDevelopmentFund 民航（CAAC)发展基金。
    *
    * @return $this
    */
    public function setCaacDevelopmentFund($caacDevelopmentFund)
    {
        $this->container['caacDevelopmentFund'] = $caacDevelopmentFund;
        return $this;
    }

    /**
    * Gets fuelSurcharge
    *  燃油附加费。
    *
    * @return string|null
    */
    public function getFuelSurcharge()
    {
        return $this->container['fuelSurcharge'];
    }

    /**
    * Sets fuelSurcharge
    *
    * @param string|null $fuelSurcharge 燃油附加费。
    *
    * @return $this
    */
    public function setFuelSurcharge($fuelSurcharge)
    {
        $this->container['fuelSurcharge'] = $fuelSurcharge;
        return $this;
    }

    /**
    * Gets otherTaxes
    *  其他税费。
    *
    * @return string|null
    */
    public function getOtherTaxes()
    {
        return $this->container['otherTaxes'];
    }

    /**
    * Sets otherTaxes
    *
    * @param string|null $otherTaxes 其他税费。
    *
    * @return $this
    */
    public function setOtherTaxes($otherTaxes)
    {
        $this->container['otherTaxes'] = $otherTaxes;
        return $this;
    }

    /**
    * Gets total
    *  合计。
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
    * @param string|null $total 合计。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets eTicketNumber
    *  电子客票号码。
    *
    * @return string|null
    */
    public function getETicketNumber()
    {
        return $this->container['eTicketNumber'];
    }

    /**
    * Sets eTicketNumber
    *
    * @param string|null $eTicketNumber 电子客票号码。
    *
    * @return $this
    */
    public function setETicketNumber($eTicketNumber)
    {
        $this->container['eTicketNumber'] = $eTicketNumber;
        return $this;
    }

    /**
    * Gets checkCode
    *  验证码。
    *
    * @return string|null
    */
    public function getCheckCode()
    {
        return $this->container['checkCode'];
    }

    /**
    * Sets checkCode
    *
    * @param string|null $checkCode 验证码。
    *
    * @return $this
    */
    public function setCheckCode($checkCode)
    {
        $this->container['checkCode'] = $checkCode;
        return $this;
    }

    /**
    * Gets referenceInformation
    *  提示信息。
    *
    * @return string|null
    */
    public function getReferenceInformation()
    {
        return $this->container['referenceInformation'];
    }

    /**
    * Sets referenceInformation
    *
    * @param string|null $referenceInformation 提示信息。
    *
    * @return $this
    */
    public function setReferenceInformation($referenceInformation)
    {
        $this->container['referenceInformation'] = $referenceInformation;
        return $this;
    }

    /**
    * Gets insurance
    *  保险费。
    *
    * @return string|null
    */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
    * Sets insurance
    *
    * @param string|null $insurance 保险费。
    *
    * @return $this
    */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;
        return $this;
    }

    /**
    * Gets agentCode
    *  销售单位代号。
    *
    * @return string|null
    */
    public function getAgentCode()
    {
        return $this->container['agentCode'];
    }

    /**
    * Sets agentCode
    *
    * @param string|null $agentCode 销售单位代号。
    *
    * @return $this
    */
    public function setAgentCode($agentCode)
    {
        $this->container['agentCode'] = $agentCode;
        return $this;
    }

    /**
    * Gets issueOrganization
    *  填开单位。
    *
    * @return string|null
    */
    public function getIssueOrganization()
    {
        return $this->container['issueOrganization'];
    }

    /**
    * Sets issueOrganization
    *
    * @param string|null $issueOrganization 填开单位。
    *
    * @return $this
    */
    public function setIssueOrganization($issueOrganization)
    {
        $this->container['issueOrganization'] = $issueOrganization;
        return $this;
    }

    /**
    * Gets issueDate
    *  填开日期。
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
    * @param string|null $issueDate 填开日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets tax
    *  增值税税额
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
    * @param string|null $tax 增值税税额
    *
    * @return $this
    */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;
        return $this;
    }

    /**
    * Gets taxRate
    *  增值税税率
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
    * @param string|null $taxRate 增值税税率
    *
    * @return $this
    */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;
        return $this;
    }

    /**
    * Gets buyerName
    *  购买方名称
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
    * @param string|null $buyerName 购买方名称
    *
    * @return $this
    */
    public function setBuyerName($buyerName)
    {
        $this->container['buyerName'] = $buyerName;
        return $this;
    }

    /**
    * Gets buyerId
    *  购买方纳税人识别号
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
    * @param string|null $buyerId 购买方纳税人识别号
    *
    * @return $this
    */
    public function setBuyerId($buyerId)
    {
        $this->container['buyerId'] = $buyerId;
        return $this;
    }

    /**
    * Gets number
    *  发票号码
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
    * @param string|null $number 发票号码
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets internationalFlag
    *  国内国际标签
    *
    * @return string|null
    */
    public function getInternationalFlag()
    {
        return $this->container['internationalFlag'];
    }

    /**
    * Sets internationalFlag
    *
    * @param string|null $internationalFlag 国内国际标签
    *
    * @return $this
    */
    public function setInternationalFlag($internationalFlag)
    {
        $this->container['internationalFlag'] = $internationalFlag;
        return $this;
    }

    /**
    * Gets issueStatus
    *  开具状态
    *
    * @return string|null
    */
    public function getIssueStatus()
    {
        return $this->container['issueStatus'];
    }

    /**
    * Sets issueStatus
    *
    * @param string|null $issueStatus 开具状态
    *
    * @return $this
    */
    public function setIssueStatus($issueStatus)
    {
        $this->container['issueStatus'] = $issueStatus;
        return $this;
    }

    /**
    * Gets itineraryList
    *  机票行程列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ItineraryList[]|null
    */
    public function getItineraryList()
    {
        return $this->container['itineraryList'];
    }

    /**
    * Sets itineraryList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ItineraryList[]|null $itineraryList 机票行程列表。
    *
    * @return $this
    */
    public function setItineraryList($itineraryList)
    {
        $this->container['itineraryList'] = $itineraryList;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，取值范围0~1。  置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。  > 说明：  - （1）置信度中的相关字段均与返回值中的相关字段一一对应；  - （2）置信度中的itinerary_list的顺序与返回值中的itinerary_list的顺序是一致的。
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
    * @param object|null $confidence 相关字段的置信度信息，取值范围0~1。  置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。  > 说明：  - （1）置信度中的相关字段均与返回值中的相关字段一一对应；  - （2）置信度中的itinerary_list的顺序与返回值中的itinerary_list的顺序是一致的。
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

