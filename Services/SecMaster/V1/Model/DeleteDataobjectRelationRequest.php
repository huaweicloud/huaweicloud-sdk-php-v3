<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteDataobjectRelationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteDataobjectRelationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dataclassType  关联主体数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * dataObjectId  关联主体数据对象的id
    * relatedDataclassType  被关联的数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'workspaceId' => 'string',
            'dataclassType' => 'string',
            'dataObjectId' => 'string',
            'relatedDataclassType' => 'string',
            'body' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateDataobjectRelationRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dataclassType  关联主体数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * dataObjectId  关联主体数据对象的id
    * relatedDataclassType  被关联的数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'workspaceId' => null,
        'dataclassType' => null,
        'dataObjectId' => null,
        'relatedDataclassType' => null,
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
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dataclassType  关联主体数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * dataObjectId  关联主体数据对象的id
    * relatedDataclassType  被关联的数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'workspaceId' => 'workspace_id',
            'dataclassType' => 'dataclass_type',
            'dataObjectId' => 'data_object_id',
            'relatedDataclassType' => 'related_dataclass_type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dataclassType  关联主体数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * dataObjectId  关联主体数据对象的id
    * relatedDataclassType  被关联的数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'workspaceId' => 'setWorkspaceId',
            'dataclassType' => 'setDataclassType',
            'dataObjectId' => 'setDataObjectId',
            'relatedDataclassType' => 'setRelatedDataclassType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dataclassType  关联主体数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * dataObjectId  关联主体数据对象的id
    * relatedDataclassType  被关联的数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'workspaceId' => 'getWorkspaceId',
            'dataclassType' => 'getDataclassType',
            'dataObjectId' => 'getDataObjectId',
            'relatedDataclassType' => 'getRelatedDataclassType',
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['dataclassType'] = isset($data['dataclassType']) ? $data['dataclassType'] : null;
        $this->container['dataObjectId'] = isset($data['dataObjectId']) ? $data['dataObjectId'] : null;
        $this->container['relatedDataclassType'] = isset($data['relatedDataclassType']) ? $data['relatedDataclassType'] : null;
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
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['dataclassType'] === null) {
            $invalidProperties[] = "'dataclassType' can't be null";
        }
            if ((mb_strlen($this->container['dataclassType']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dataclassType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['dataObjectId'] === null) {
            $invalidProperties[] = "'dataObjectId' can't be null";
        }
            if ((mb_strlen($this->container['dataObjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataObjectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataObjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataObjectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['relatedDataclassType'] === null) {
            $invalidProperties[] = "'relatedDataclassType' can't be null";
        }
            if ((mb_strlen($this->container['relatedDataclassType']) > 64)) {
                $invalidProperties[] = "invalid value for 'relatedDataclassType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['relatedDataclassType']) < 1)) {
                $invalidProperties[] = "invalid value for 'relatedDataclassType', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释：** 工作空间id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId **参数解释：** 工作空间id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets dataclassType
    *  关联主体数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    *
    * @return string
    */
    public function getDataclassType()
    {
        return $this->container['dataclassType'];
    }

    /**
    * Sets dataclassType
    *
    * @param string $dataclassType 关联主体数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    *
    * @return $this
    */
    public function setDataclassType($dataclassType)
    {
        $this->container['dataclassType'] = $dataclassType;
        return $this;
    }

    /**
    * Gets dataObjectId
    *  关联主体数据对象的id
    *
    * @return string
    */
    public function getDataObjectId()
    {
        return $this->container['dataObjectId'];
    }

    /**
    * Sets dataObjectId
    *
    * @param string $dataObjectId 关联主体数据对象的id
    *
    * @return $this
    */
    public function setDataObjectId($dataObjectId)
    {
        $this->container['dataObjectId'] = $dataObjectId;
        return $this;
    }

    /**
    * Gets relatedDataclassType
    *  被关联的数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    *
    * @return string
    */
    public function getRelatedDataclassType()
    {
        return $this->container['relatedDataclassType'];
    }

    /**
    * Sets relatedDataclassType
    *
    * @param string $relatedDataclassType 被关联的数据对象所属数据类，小写复数，如告警为alerts，事件为incidents
    *
    * @return $this
    */
    public function setRelatedDataclassType($relatedDataclassType)
    {
        $this->container['relatedDataclassType'] = $relatedDataclassType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateDataobjectRelationRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateDataobjectRelationRequestBody|null $body body
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

