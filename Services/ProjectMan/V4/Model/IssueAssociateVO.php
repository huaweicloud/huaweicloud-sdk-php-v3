<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueAssociateVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueAssociateVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * associatedIds  关联的工作项ID，多个ID使用逗号分割。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。 当link_field_code=link时，最多支持关联500个工作项ID，其他场景最多支持50个工作项ID。
    * operationFlag  操作类型标记位。
    * associateIssueType  关联项类型编码。
    * sourceIssueType  当前工作项类型编码。
    * isReplace  是否使用替换模式。默认为false，追加关联项。如果为true，则会删除原有的关联项，替换为本次关联的工作项。
    * linkFieldCode  关联字段的字段编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'associatedIds' => 'string',
            'operationFlag' => 'int',
            'associateIssueType' => 'string',
            'sourceIssueType' => 'string',
            'isReplace' => 'bool',
            'linkFieldCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * associatedIds  关联的工作项ID，多个ID使用逗号分割。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。 当link_field_code=link时，最多支持关联500个工作项ID，其他场景最多支持50个工作项ID。
    * operationFlag  操作类型标记位。
    * associateIssueType  关联项类型编码。
    * sourceIssueType  当前工作项类型编码。
    * isReplace  是否使用替换模式。默认为false，追加关联项。如果为true，则会删除原有的关联项，替换为本次关联的工作项。
    * linkFieldCode  关联字段的字段编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'associatedIds' => null,
        'operationFlag' => 'int32',
        'associateIssueType' => null,
        'sourceIssueType' => null,
        'isReplace' => null,
        'linkFieldCode' => null
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
    * associatedIds  关联的工作项ID，多个ID使用逗号分割。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。 当link_field_code=link时，最多支持关联500个工作项ID，其他场景最多支持50个工作项ID。
    * operationFlag  操作类型标记位。
    * associateIssueType  关联项类型编码。
    * sourceIssueType  当前工作项类型编码。
    * isReplace  是否使用替换模式。默认为false，追加关联项。如果为true，则会删除原有的关联项，替换为本次关联的工作项。
    * linkFieldCode  关联字段的字段编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'associatedIds' => 'associated_ids',
            'operationFlag' => 'operation_flag',
            'associateIssueType' => 'associate_issue_type',
            'sourceIssueType' => 'source_issue_type',
            'isReplace' => 'is_replace',
            'linkFieldCode' => 'link_field_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * associatedIds  关联的工作项ID，多个ID使用逗号分割。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。 当link_field_code=link时，最多支持关联500个工作项ID，其他场景最多支持50个工作项ID。
    * operationFlag  操作类型标记位。
    * associateIssueType  关联项类型编码。
    * sourceIssueType  当前工作项类型编码。
    * isReplace  是否使用替换模式。默认为false，追加关联项。如果为true，则会删除原有的关联项，替换为本次关联的工作项。
    * linkFieldCode  关联字段的字段编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'associatedIds' => 'setAssociatedIds',
            'operationFlag' => 'setOperationFlag',
            'associateIssueType' => 'setAssociateIssueType',
            'sourceIssueType' => 'setSourceIssueType',
            'isReplace' => 'setIsReplace',
            'linkFieldCode' => 'setLinkFieldCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * associatedIds  关联的工作项ID，多个ID使用逗号分割。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。 当link_field_code=link时，最多支持关联500个工作项ID，其他场景最多支持50个工作项ID。
    * operationFlag  操作类型标记位。
    * associateIssueType  关联项类型编码。
    * sourceIssueType  当前工作项类型编码。
    * isReplace  是否使用替换模式。默认为false，追加关联项。如果为true，则会删除原有的关联项，替换为本次关联的工作项。
    * linkFieldCode  关联字段的字段编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'associatedIds' => 'getAssociatedIds',
            'operationFlag' => 'getOperationFlag',
            'associateIssueType' => 'getAssociateIssueType',
            'sourceIssueType' => 'getSourceIssueType',
            'isReplace' => 'getIsReplace',
            'linkFieldCode' => 'getLinkFieldCode'
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
        $this->container['associatedIds'] = isset($data['associatedIds']) ? $data['associatedIds'] : null;
        $this->container['operationFlag'] = isset($data['operationFlag']) ? $data['operationFlag'] : null;
        $this->container['associateIssueType'] = isset($data['associateIssueType']) ? $data['associateIssueType'] : null;
        $this->container['sourceIssueType'] = isset($data['sourceIssueType']) ? $data['sourceIssueType'] : null;
        $this->container['isReplace'] = isset($data['isReplace']) ? $data['isReplace'] : null;
        $this->container['linkFieldCode'] = isset($data['linkFieldCode']) ? $data['linkFieldCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['associatedIds'] === null) {
            $invalidProperties[] = "'associatedIds' can't be null";
        }
        if ($this->container['operationFlag'] === null) {
            $invalidProperties[] = "'operationFlag' can't be null";
        }
        if ($this->container['associateIssueType'] === null) {
            $invalidProperties[] = "'associateIssueType' can't be null";
        }
        if ($this->container['sourceIssueType'] === null) {
            $invalidProperties[] = "'sourceIssueType' can't be null";
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
    * Gets associatedIds
    *  关联的工作项ID，多个ID使用逗号分割。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。 当link_field_code=link时，最多支持关联500个工作项ID，其他场景最多支持50个工作项ID。
    *
    * @return string
    */
    public function getAssociatedIds()
    {
        return $this->container['associatedIds'];
    }

    /**
    * Sets associatedIds
    *
    * @param string $associatedIds 关联的工作项ID，多个ID使用逗号分割。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。 当link_field_code=link时，最多支持关联500个工作项ID，其他场景最多支持50个工作项ID。
    *
    * @return $this
    */
    public function setAssociatedIds($associatedIds)
    {
        $this->container['associatedIds'] = $associatedIds;
        return $this;
    }

    /**
    * Gets operationFlag
    *  操作类型标记位。
    *
    * @return int
    */
    public function getOperationFlag()
    {
        return $this->container['operationFlag'];
    }

    /**
    * Sets operationFlag
    *
    * @param int $operationFlag 操作类型标记位。
    *
    * @return $this
    */
    public function setOperationFlag($operationFlag)
    {
        $this->container['operationFlag'] = $operationFlag;
        return $this;
    }

    /**
    * Gets associateIssueType
    *  关联项类型编码。
    *
    * @return string
    */
    public function getAssociateIssueType()
    {
        return $this->container['associateIssueType'];
    }

    /**
    * Sets associateIssueType
    *
    * @param string $associateIssueType 关联项类型编码。
    *
    * @return $this
    */
    public function setAssociateIssueType($associateIssueType)
    {
        $this->container['associateIssueType'] = $associateIssueType;
        return $this;
    }

    /**
    * Gets sourceIssueType
    *  当前工作项类型编码。
    *
    * @return string
    */
    public function getSourceIssueType()
    {
        return $this->container['sourceIssueType'];
    }

    /**
    * Sets sourceIssueType
    *
    * @param string $sourceIssueType 当前工作项类型编码。
    *
    * @return $this
    */
    public function setSourceIssueType($sourceIssueType)
    {
        $this->container['sourceIssueType'] = $sourceIssueType;
        return $this;
    }

    /**
    * Gets isReplace
    *  是否使用替换模式。默认为false，追加关联项。如果为true，则会删除原有的关联项，替换为本次关联的工作项。
    *
    * @return bool|null
    */
    public function getIsReplace()
    {
        return $this->container['isReplace'];
    }

    /**
    * Sets isReplace
    *
    * @param bool|null $isReplace 是否使用替换模式。默认为false，追加关联项。如果为true，则会删除原有的关联项，替换为本次关联的工作项。
    *
    * @return $this
    */
    public function setIsReplace($isReplace)
    {
        $this->container['isReplace'] = $isReplace;
        return $this;
    }

    /**
    * Gets linkFieldCode
    *  关联字段的字段编码。
    *
    * @return string|null
    */
    public function getLinkFieldCode()
    {
        return $this->container['linkFieldCode'];
    }

    /**
    * Sets linkFieldCode
    *
    * @param string|null $linkFieldCode 关联字段的字段编码。
    *
    * @return $this
    */
    public function setLinkFieldCode($linkFieldCode)
    {
        $this->container['linkFieldCode'] = $linkFieldCode;
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

