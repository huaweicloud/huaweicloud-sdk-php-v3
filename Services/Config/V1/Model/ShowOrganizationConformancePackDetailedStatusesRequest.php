<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOrganizationConformancePackDetailedStatusesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOrganizationConformancePackDetailedStatusesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organizationId  组织ID。
    * conformancePackName  合规规则包名称。
    * organizationConformancePackId  组织合规规则包ID。
    * state  部署状态，区分大小写
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organizationId' => 'string',
            'conformancePackName' => 'string',
            'organizationConformancePackId' => 'string',
            'state' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organizationId  组织ID。
    * conformancePackName  合规规则包名称。
    * organizationConformancePackId  组织合规规则包ID。
    * state  部署状态，区分大小写
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organizationId' => null,
        'conformancePackName' => null,
        'organizationConformancePackId' => null,
        'state' => null,
        'limit' => 'int32',
        'marker' => null
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
    * organizationId  组织ID。
    * conformancePackName  合规规则包名称。
    * organizationConformancePackId  组织合规规则包ID。
    * state  部署状态，区分大小写
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organizationId' => 'organization_id',
            'conformancePackName' => 'conformance_pack_name',
            'organizationConformancePackId' => 'organization_conformance_pack_id',
            'state' => 'state',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organizationId  组织ID。
    * conformancePackName  合规规则包名称。
    * organizationConformancePackId  组织合规规则包ID。
    * state  部署状态，区分大小写
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $setters = [
            'organizationId' => 'setOrganizationId',
            'conformancePackName' => 'setConformancePackName',
            'organizationConformancePackId' => 'setOrganizationConformancePackId',
            'state' => 'setState',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organizationId  组织ID。
    * conformancePackName  合规规则包名称。
    * organizationConformancePackId  组织合规规则包ID。
    * state  部署状态，区分大小写
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $getters = [
            'organizationId' => 'getOrganizationId',
            'conformancePackName' => 'getConformancePackName',
            'organizationConformancePackId' => 'getOrganizationConformancePackId',
            'state' => 'getState',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
    const STATE_CREATE_SUCCESSFUL = 'CREATE_SUCCESSFUL';
    const STATE_CREATE_IN_PROGRESS = 'CREATE_IN_PROGRESS';
    const STATE_CREATE_FAILED = 'CREATE_FAILED';
    const STATE_DELETE_IN_PROGRESS = 'DELETE_IN_PROGRESS';
    const STATE_DELETE_FAILED = 'DELETE_FAILED';
    const STATE_UPDATE_SUCCESSFUL = 'UPDATE_SUCCESSFUL';
    const STATE_UPDATE_IN_PROGRESS = 'UPDATE_IN_PROGRESS';
    const STATE_UPDATE_FAILED = 'UPDATE_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CREATE_SUCCESSFUL,
            self::STATE_CREATE_IN_PROGRESS,
            self::STATE_CREATE_FAILED,
            self::STATE_DELETE_IN_PROGRESS,
            self::STATE_DELETE_FAILED,
            self::STATE_UPDATE_SUCCESSFUL,
            self::STATE_UPDATE_IN_PROGRESS,
            self::STATE_UPDATE_FAILED,
        ];
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['conformancePackName'] = isset($data['conformancePackName']) ? $data['conformancePackName'] : null;
        $this->container['organizationConformancePackId'] = isset($data['organizationConformancePackId']) ? $data['organizationConformancePackId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['organizationId'] === null) {
            $invalidProperties[] = "'organizationId' can't be null";
        }
            if ((mb_strlen($this->container['organizationId']) > 34)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^o-[0-9a-z]{10,32}$/", $this->container['organizationId'])) {
                $invalidProperties[] = "invalid value for 'organizationId', must be conform to the pattern /^o-[0-9a-z]{10,32}$/.";
            }
            if (!is_null($this->container['conformancePackName']) && (mb_strlen($this->container['conformancePackName']) > 64)) {
                $invalidProperties[] = "invalid value for 'conformancePackName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['conformancePackName']) && (mb_strlen($this->container['conformancePackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'conformancePackName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['conformancePackName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-]+/", $this->container['conformancePackName'])) {
                $invalidProperties[] = "invalid value for 'conformancePackName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-]+/.";
            }
            if (!is_null($this->container['organizationConformancePackId']) && (mb_strlen($this->container['organizationConformancePackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'organizationConformancePackId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['organizationConformancePackId']) && !preg_match("/[\\w-]+/", $this->container['organizationConformancePackId'])) {
                $invalidProperties[] = "invalid value for 'organizationConformancePackId', must be conform to the pattern /[\\w-]+/.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 20)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['state']) && !preg_match("/^[A-Z_]+/", $this->container['state'])) {
                $invalidProperties[] = "invalid value for 'state', must be conform to the pattern /^[A-Z_]+/.";
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
    * Gets organizationId
    *  组织ID。
    *
    * @return string
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string $organizationId 组织ID。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets conformancePackName
    *  合规规则包名称。
    *
    * @return string|null
    */
    public function getConformancePackName()
    {
        return $this->container['conformancePackName'];
    }

    /**
    * Sets conformancePackName
    *
    * @param string|null $conformancePackName 合规规则包名称。
    *
    * @return $this
    */
    public function setConformancePackName($conformancePackName)
    {
        $this->container['conformancePackName'] = $conformancePackName;
        return $this;
    }

    /**
    * Gets organizationConformancePackId
    *  组织合规规则包ID。
    *
    * @return string|null
    */
    public function getOrganizationConformancePackId()
    {
        return $this->container['organizationConformancePackId'];
    }

    /**
    * Sets organizationConformancePackId
    *
    * @param string|null $organizationConformancePackId 组织合规规则包ID。
    *
    * @return $this
    */
    public function setOrganizationConformancePackId($organizationConformancePackId)
    {
        $this->container['organizationConformancePackId'] = $organizationConformancePackId;
        return $this;
    }

    /**
    * Gets state
    *  部署状态，区分大小写
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 部署状态，区分大小写
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

