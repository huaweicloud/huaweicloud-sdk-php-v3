<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMonthlyExpendituresRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMonthlyExpendituresRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cycle  查询消费汇总账单所在的账期，格式为YYYY-MM。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。当不传递此参数时，查询的账单是以云服务类型为维度的月度消费账单。当传递此参数时，查询的账单是该云服务类型下以资源类型为维度的月度消费账单。
    * type  0：华为云账户 1：伙伴设置预算账户，仅当客户关联合作伙伴且关联类型为转售模式时，才会存在伙伴拨款设置预算账户。不传此参数默认查询华为云账户下的消费汇总。
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cycle' => 'string',
            'cloudServiceTypeCode' => 'string',
            'type' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cycle  查询消费汇总账单所在的账期，格式为YYYY-MM。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。当不传递此参数时，查询的账单是以云服务类型为维度的月度消费账单。当传递此参数时，查询的账单是该云服务类型下以资源类型为维度的月度消费账单。
    * type  0：华为云账户 1：伙伴设置预算账户，仅当客户关联合作伙伴且关联类型为转售模式时，才会存在伙伴拨款设置预算账户。不传此参数默认查询华为云账户下的消费汇总。
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cycle' => null,
        'cloudServiceTypeCode' => null,
        'type' => null,
        'enterpriseProjectId' => null
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
    * cycle  查询消费汇总账单所在的账期，格式为YYYY-MM。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。当不传递此参数时，查询的账单是以云服务类型为维度的月度消费账单。当传递此参数时，查询的账单是该云服务类型下以资源类型为维度的月度消费账单。
    * type  0：华为云账户 1：伙伴设置预算账户，仅当客户关联合作伙伴且关联类型为转售模式时，才会存在伙伴拨款设置预算账户。不传此参数默认查询华为云账户下的消费汇总。
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cycle' => 'cycle',
            'cloudServiceTypeCode' => 'cloud_service_type_code',
            'type' => 'type',
            'enterpriseProjectId' => 'enterpriseProjectId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cycle  查询消费汇总账单所在的账期，格式为YYYY-MM。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。当不传递此参数时，查询的账单是以云服务类型为维度的月度消费账单。当传递此参数时，查询的账单是该云服务类型下以资源类型为维度的月度消费账单。
    * type  0：华为云账户 1：伙伴设置预算账户，仅当客户关联合作伙伴且关联类型为转售模式时，才会存在伙伴拨款设置预算账户。不传此参数默认查询华为云账户下的消费汇总。
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'cycle' => 'setCycle',
            'cloudServiceTypeCode' => 'setCloudServiceTypeCode',
            'type' => 'setType',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cycle  查询消费汇总账单所在的账期，格式为YYYY-MM。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。当不传递此参数时，查询的账单是以云服务类型为维度的月度消费账单。当传递此参数时，查询的账单是该云服务类型下以资源类型为维度的月度消费账单。
    * type  0：华为云账户 1：伙伴设置预算账户，仅当客户关联合作伙伴且关联类型为转售模式时，才会存在伙伴拨款设置预算账户。不传此参数默认查询华为云账户下的消费汇总。
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'cycle' => 'getCycle',
            'cloudServiceTypeCode' => 'getCloudServiceTypeCode',
            'type' => 'getType',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['cloudServiceTypeCode'] = isset($data['cloudServiceTypeCode']) ? $data['cloudServiceTypeCode'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cycle'] === null) {
            $invalidProperties[] = "'cycle' can't be null";
        }
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
    * Gets cycle
    *  查询消费汇总账单所在的账期，格式为YYYY-MM。
    *
    * @return string
    */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
    * Sets cycle
    *
    * @param string $cycle 查询消费汇总账单所在的账期，格式为YYYY-MM。
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets cloudServiceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。当不传递此参数时，查询的账单是以云服务类型为维度的月度消费账单。当传递此参数时，查询的账单是该云服务类型下以资源类型为维度的月度消费账单。
    *
    * @return string|null
    */
    public function getCloudServiceTypeCode()
    {
        return $this->container['cloudServiceTypeCode'];
    }

    /**
    * Sets cloudServiceTypeCode
    *
    * @param string|null $cloudServiceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。当不传递此参数时，查询的账单是以云服务类型为维度的月度消费账单。当传递此参数时，查询的账单是该云服务类型下以资源类型为维度的月度消费账单。
    *
    * @return $this
    */
    public function setCloudServiceTypeCode($cloudServiceTypeCode)
    {
        $this->container['cloudServiceTypeCode'] = $cloudServiceTypeCode;
        return $this;
    }

    /**
    * Gets type
    *  0：华为云账户 1：伙伴设置预算账户，仅当客户关联合作伙伴且关联类型为转售模式时，才会存在伙伴拨款设置预算账户。不传此参数默认查询华为云账户下的消费汇总。
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
    * @param string|null $type 0：华为云账户 1：伙伴设置预算账户，仅当客户关联合作伙伴且关联类型为转售模式时，才会存在伙伴拨款设置预算账户。不传此参数默认查询华为云账户下的消费汇总。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

