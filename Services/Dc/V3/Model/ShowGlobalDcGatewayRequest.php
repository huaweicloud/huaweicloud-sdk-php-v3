<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGlobalDcGatewayRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGlobalDcGatewayRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~2000。
    * fields  显示字段列表
    * extFields  show response ext-fields
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalDcGatewayId  全域接入网关ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'fields' => 'string[]',
            'extFields' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'globalDcGatewayId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~2000。
    * fields  显示字段列表
    * extFields  show response ext-fields
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalDcGatewayId  全域接入网关ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'fields' => null,
        'extFields' => null,
        'enterpriseProjectId' => null,
        'globalDcGatewayId' => null
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
    * limit  每页返回的个数。 取值范围：1~2000。
    * fields  显示字段列表
    * extFields  show response ext-fields
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalDcGatewayId  全域接入网关ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'fields' => 'fields',
            'extFields' => 'ext_fields',
            'enterpriseProjectId' => 'enterprise_project_id',
            'globalDcGatewayId' => 'global_dc_gateway_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~2000。
    * fields  显示字段列表
    * extFields  show response ext-fields
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalDcGatewayId  全域接入网关ID
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'fields' => 'setFields',
            'extFields' => 'setExtFields',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'globalDcGatewayId' => 'setGlobalDcGatewayId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~2000。
    * fields  显示字段列表
    * extFields  show response ext-fields
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalDcGatewayId  全域接入网关ID
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'fields' => 'getFields',
            'extFields' => 'getExtFields',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'globalDcGatewayId' => 'getGlobalDcGatewayId'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['extFields'] = isset($data['extFields']) ? $data['extFields'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['globalDcGatewayId'] = isset($data['globalDcGatewayId']) ? $data['globalDcGatewayId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['globalDcGatewayId'] === null) {
            $invalidProperties[] = "'globalDcGatewayId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['globalDcGatewayId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets limit
    *  每页返回的个数。 取值范围：1~2000。
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
    * @param int|null $limit 每页返回的个数。 取值范围：1~2000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets fields
    *  显示字段列表
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 显示字段列表
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets extFields
    *  show response ext-fields
    *
    * @return string[]|null
    */
    public function getExtFields()
    {
        return $this->container['extFields'];
    }

    /**
    * Sets extFields
    *
    * @param string[]|null $extFields show response ext-fields
    *
    * @return $this
    */
    public function setExtFields($extFields)
    {
        $this->container['extFields'] = $extFields;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  根据企业项目ID过滤资源实例
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 根据企业项目ID过滤资源实例
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets globalDcGatewayId
    *  全域接入网关ID
    *
    * @return string
    */
    public function getGlobalDcGatewayId()
    {
        return $this->container['globalDcGatewayId'];
    }

    /**
    * Sets globalDcGatewayId
    *
    * @param string $globalDcGatewayId 全域接入网关ID
    *
    * @return $this
    */
    public function setGlobalDcGatewayId($globalDcGatewayId)
    {
        $this->container['globalDcGatewayId'] = $globalDcGatewayId;
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

