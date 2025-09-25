<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConformancePackComplianceDetailsByPackIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConformancePackComplianceDetailsByPackIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conformancePackId  合规规则包ID。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * policyAssignmentName  合规规则名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conformancePackId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'policyAssignmentName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conformancePackId  合规规则包ID。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * policyAssignmentName  合规规则名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conformancePackId' => null,
        'limit' => 'int32',
        'marker' => null,
        'policyAssignmentName' => null
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
    * conformancePackId  合规规则包ID。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * policyAssignmentName  合规规则名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conformancePackId' => 'conformance_pack_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'policyAssignmentName' => 'policy_assignment_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conformancePackId  合规规则包ID。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * policyAssignmentName  合规规则名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'conformancePackId' => 'setConformancePackId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'policyAssignmentName' => 'setPolicyAssignmentName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conformancePackId  合规规则包ID。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * policyAssignmentName  合规规则名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'conformancePackId' => 'getConformancePackId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'policyAssignmentName' => 'getPolicyAssignmentName'
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
        $this->container['conformancePackId'] = isset($data['conformancePackId']) ? $data['conformancePackId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['policyAssignmentName'] = isset($data['policyAssignmentName']) ? $data['policyAssignmentName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conformancePackId'] === null) {
            $invalidProperties[] = "'conformancePackId' can't be null";
        }
            if ((mb_strlen($this->container['conformancePackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'conformancePackId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['conformancePackId'])) {
                $invalidProperties[] = "invalid value for 'conformancePackId', must be conform to the pattern /[\\w-]+/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 400)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 4)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[A-Za-z0-9+\/=%\\-_]+/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[A-Za-z0-9+\/=%\\-_]+/.";
            }
            if (!is_null($this->container['policyAssignmentName']) && (mb_strlen($this->container['policyAssignmentName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyAssignmentName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyAssignmentName']) && (mb_strlen($this->container['policyAssignmentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyAssignmentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyAssignmentName']) && !preg_match("/^(?!\\s)[\\u4e00-\\u9fa5\\u00C0-\\u00FFa-zA-Z0-9_\\- ]+(?<!\\s)$/", $this->container['policyAssignmentName'])) {
                $invalidProperties[] = "invalid value for 'policyAssignmentName', must be conform to the pattern /^(?!\\s)[\\u4e00-\\u9fa5\\u00C0-\\u00FFa-zA-Z0-9_\\- ]+(?<!\\s)$/.";
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
    * Gets conformancePackId
    *  合规规则包ID。
    *
    * @return string
    */
    public function getConformancePackId()
    {
        return $this->container['conformancePackId'];
    }

    /**
    * Sets conformancePackId
    *
    * @param string $conformancePackId 合规规则包ID。
    *
    * @return $this
    */
    public function setConformancePackId($conformancePackId)
    {
        $this->container['conformancePackId'] = $conformancePackId;
        return $this;
    }

    /**
    * Gets limit
    *  最大的返回数量
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
    * @param int|null $limit 最大的返回数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets policyAssignmentName
    *  合规规则名称。
    *
    * @return string|null
    */
    public function getPolicyAssignmentName()
    {
        return $this->container['policyAssignmentName'];
    }

    /**
    * Sets policyAssignmentName
    *
    * @param string|null $policyAssignmentName 合规规则名称。
    *
    * @return $this
    */
    public function setPolicyAssignmentName($policyAssignmentName)
    {
        $this->container['policyAssignmentName'] = $policyAssignmentName;
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

