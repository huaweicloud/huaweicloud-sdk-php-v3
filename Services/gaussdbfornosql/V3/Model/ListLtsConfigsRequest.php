<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLtsConfigsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLtsConfigsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言。
    * offset  索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。取值必须为数字，不能为负数。默认取0值，表示从第一条数据开始查询。
    * limit  查询记录数。取值范围：1~100，必须为数字。不传该参数时，默认查询前100条实例信息。
    * instanceId  根据实例ID精确搜索。
    * instanceName  根据实例名称模糊搜索。
    * enterpriseProjectId  根据企业项目ID精确搜索。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言。
    * offset  索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。取值必须为数字，不能为负数。默认取0值，表示从第一条数据开始查询。
    * limit  查询记录数。取值范围：1~100，必须为数字。不传该参数时，默认查询前100条实例信息。
    * instanceId  根据实例ID精确搜索。
    * instanceName  根据实例名称模糊搜索。
    * enterpriseProjectId  根据企业项目ID精确搜索。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'offset' => null,
        'limit' => null,
        'instanceId' => null,
        'instanceName' => null,
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
    * xLanguage  语言。
    * offset  索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。取值必须为数字，不能为负数。默认取0值，表示从第一条数据开始查询。
    * limit  查询记录数。取值范围：1~100，必须为数字。不传该参数时，默认查询前100条实例信息。
    * instanceId  根据实例ID精确搜索。
    * instanceName  根据实例名称模糊搜索。
    * enterpriseProjectId  根据企业项目ID精确搜索。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'offset' => 'offset',
            'limit' => 'limit',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言。
    * offset  索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。取值必须为数字，不能为负数。默认取0值，表示从第一条数据开始查询。
    * limit  查询记录数。取值范围：1~100，必须为数字。不传该参数时，默认查询前100条实例信息。
    * instanceId  根据实例ID精确搜索。
    * instanceName  根据实例名称模糊搜索。
    * enterpriseProjectId  根据企业项目ID精确搜索。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言。
    * offset  索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。取值必须为数字，不能为负数。默认取0值，表示从第一条数据开始查询。
    * limit  查询记录数。取值范围：1~100，必须为数字。不传该参数时，默认查询前100条实例信息。
    * instanceId  根据实例ID精确搜索。
    * instanceName  根据实例名称模糊搜索。
    * enterpriseProjectId  根据企业项目ID精确搜索。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
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
    * Gets xLanguage
    *  语言。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。取值必须为数字，不能为负数。默认取0值，表示从第一条数据开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。取值必须为数字，不能为负数。默认取0值，表示从第一条数据开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。取值范围：1~100，必须为数字。不传该参数时，默认查询前100条实例信息。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数。取值范围：1~100，必须为数字。不传该参数时，默认查询前100条实例信息。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets instanceId
    *  根据实例ID精确搜索。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 根据实例ID精确搜索。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  根据实例名称模糊搜索。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 根据实例名称模糊搜索。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  根据企业项目ID精确搜索。
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
    * @param string|null $enterpriseProjectId 根据企业项目ID精确搜索。
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

