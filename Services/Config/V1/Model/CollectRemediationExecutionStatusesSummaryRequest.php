<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectRemediationExecutionStatusesSummaryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectRemediationExecutionStatusesSummaryRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyAssignmentId  规则ID
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyAssignmentId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'body' => '\HuaweiCloud\SDK\Config\V1\Model\RemediationExecutionStatusesSummaryRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyAssignmentId  规则ID
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyAssignmentId' => null,
        'limit' => 'int32',
        'marker' => null,
        'body' => null
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
    * policyAssignmentId  规则ID
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyAssignmentId' => 'policy_assignment_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyAssignmentId  规则ID
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'policyAssignmentId' => 'setPolicyAssignmentId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyAssignmentId  规则ID
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'policyAssignmentId' => 'getPolicyAssignmentId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'body' => 'getBody'
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
        $this->container['policyAssignmentId'] = isset($data['policyAssignmentId']) ? $data['policyAssignmentId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyAssignmentId'] === null) {
            $invalidProperties[] = "'policyAssignmentId' can't be null";
        }
            if ((mb_strlen($this->container['policyAssignmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'policyAssignmentId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['policyAssignmentId'])) {
                $invalidProperties[] = "invalid value for 'policyAssignmentId', must be conform to the pattern /[\\w-]+/.";
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
    * Gets policyAssignmentId
    *  规则ID
    *
    * @return string
    */
    public function getPolicyAssignmentId()
    {
        return $this->container['policyAssignmentId'];
    }

    /**
    * Sets policyAssignmentId
    *
    * @param string $policyAssignmentId 规则ID
    *
    * @return $this
    */
    public function setPolicyAssignmentId($policyAssignmentId)
    {
        $this->container['policyAssignmentId'] = $policyAssignmentId;
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
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\RemediationExecutionStatusesSummaryRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\RemediationExecutionStatusesSummaryRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

