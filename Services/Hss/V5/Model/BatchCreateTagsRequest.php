<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  缺省值:application/json; charset=utf-8
    * resourceType  由标签管理服务定义的资源类别，企业主机安全服务调用此接口时资源类别为hss
    * resourceId  由标签管理服务定义的资源id，企业主机安全服务调用此接口时资源id为配额ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'resourceType' => 'string',
            'resourceId' => 'string',
            'body' => '\HuaweiCloud\SDK\Hss\V5\Model\BatchCreateTagsRequestInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  缺省值:application/json; charset=utf-8
    * resourceType  由标签管理服务定义的资源类别，企业主机安全服务调用此接口时资源类别为hss
    * resourceId  由标签管理服务定义的资源id，企业主机安全服务调用此接口时资源id为配额ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'resourceType' => null,
        'resourceId' => null,
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
    * contentType  缺省值:application/json; charset=utf-8
    * resourceType  由标签管理服务定义的资源类别，企业主机安全服务调用此接口时资源类别为hss
    * resourceId  由标签管理服务定义的资源id，企业主机安全服务调用此接口时资源id为配额ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  缺省值:application/json; charset=utf-8
    * resourceType  由标签管理服务定义的资源类别，企业主机安全服务调用此接口时资源类别为hss
    * resourceId  由标签管理服务定义的资源id，企业主机安全服务调用此接口时资源id为配额ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  缺省值:application/json; charset=utf-8
    * resourceType  由标签管理服务定义的资源类别，企业主机安全服务调用此接口时资源类别为hss
    * resourceId  由标签管理服务定义的资源id，企业主机安全服务调用此接口时资源id为配额ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
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
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) > 128)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
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
    * Gets contentType
    *  缺省值:application/json; charset=utf-8
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 缺省值:application/json; charset=utf-8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets resourceType
    *  由标签管理服务定义的资源类别，企业主机安全服务调用此接口时资源类别为hss
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 由标签管理服务定义的资源类别，企业主机安全服务调用此接口时资源类别为hss
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  由标签管理服务定义的资源id，企业主机安全服务调用此接口时资源id为配额ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 由标签管理服务定义的资源id，企业主机安全服务调用此接口时资源id为配额ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BatchCreateTagsRequestInfo|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BatchCreateTagsRequestInfo|null $body body
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

