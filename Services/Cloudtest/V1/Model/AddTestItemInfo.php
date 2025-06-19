<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddTestItemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddTestItemInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * comment  备注
    * name  名称
    * number  编号
    * owner  责任人
    * isFeature  是否为特性,1:特性 2:目录
    * projectUuid  项目uuid
    * parentUri  父节点uri
    * versionUri  版本URI
    * ignoreDuplicateName  是否忽略名称重复
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'comment' => 'string',
            'name' => 'string',
            'number' => 'string',
            'owner' => 'string',
            'isFeature' => 'string',
            'projectUuid' => 'string',
            'parentUri' => 'string',
            'versionUri' => 'string',
            'ignoreDuplicateName' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * comment  备注
    * name  名称
    * number  编号
    * owner  责任人
    * isFeature  是否为特性,1:特性 2:目录
    * projectUuid  项目uuid
    * parentUri  父节点uri
    * versionUri  版本URI
    * ignoreDuplicateName  是否忽略名称重复
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'comment' => null,
        'name' => null,
        'number' => null,
        'owner' => null,
        'isFeature' => null,
        'projectUuid' => null,
        'parentUri' => null,
        'versionUri' => null,
        'ignoreDuplicateName' => null
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
    * comment  备注
    * name  名称
    * number  编号
    * owner  责任人
    * isFeature  是否为特性,1:特性 2:目录
    * projectUuid  项目uuid
    * parentUri  父节点uri
    * versionUri  版本URI
    * ignoreDuplicateName  是否忽略名称重复
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'comment' => 'comment',
            'name' => 'name',
            'number' => 'number',
            'owner' => 'owner',
            'isFeature' => 'is_feature',
            'projectUuid' => 'project_uuid',
            'parentUri' => 'parent_uri',
            'versionUri' => 'version_uri',
            'ignoreDuplicateName' => 'ignore_duplicate_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * comment  备注
    * name  名称
    * number  编号
    * owner  责任人
    * isFeature  是否为特性,1:特性 2:目录
    * projectUuid  项目uuid
    * parentUri  父节点uri
    * versionUri  版本URI
    * ignoreDuplicateName  是否忽略名称重复
    *
    * @var string[]
    */
    protected static $setters = [
            'comment' => 'setComment',
            'name' => 'setName',
            'number' => 'setNumber',
            'owner' => 'setOwner',
            'isFeature' => 'setIsFeature',
            'projectUuid' => 'setProjectUuid',
            'parentUri' => 'setParentUri',
            'versionUri' => 'setVersionUri',
            'ignoreDuplicateName' => 'setIgnoreDuplicateName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * comment  备注
    * name  名称
    * number  编号
    * owner  责任人
    * isFeature  是否为特性,1:特性 2:目录
    * projectUuid  项目uuid
    * parentUri  父节点uri
    * versionUri  版本URI
    * ignoreDuplicateName  是否忽略名称重复
    *
    * @var string[]
    */
    protected static $getters = [
            'comment' => 'getComment',
            'name' => 'getName',
            'number' => 'getNumber',
            'owner' => 'getOwner',
            'isFeature' => 'getIsFeature',
            'projectUuid' => 'getProjectUuid',
            'parentUri' => 'getParentUri',
            'versionUri' => 'getVersionUri',
            'ignoreDuplicateName' => 'getIgnoreDuplicateName'
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['isFeature'] = isset($data['isFeature']) ? $data['isFeature'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['parentUri'] = isset($data['parentUri']) ? $data['parentUri'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['ignoreDuplicateName'] = isset($data['ignoreDuplicateName']) ? $data['ignoreDuplicateName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets comment
    *  备注
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 备注
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets number
    *  编号
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
    * @param string|null $number 编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets owner
    *  责任人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets isFeature
    *  是否为特性,1:特性 2:目录
    *
    * @return string|null
    */
    public function getIsFeature()
    {
        return $this->container['isFeature'];
    }

    /**
    * Sets isFeature
    *
    * @param string|null $isFeature 是否为特性,1:特性 2:目录
    *
    * @return $this
    */
    public function setIsFeature($isFeature)
    {
        $this->container['isFeature'] = $isFeature;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目uuid
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目uuid
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets parentUri
    *  父节点uri
    *
    * @return string|null
    */
    public function getParentUri()
    {
        return $this->container['parentUri'];
    }

    /**
    * Sets parentUri
    *
    * @param string|null $parentUri 父节点uri
    *
    * @return $this
    */
    public function setParentUri($parentUri)
    {
        $this->container['parentUri'] = $parentUri;
        return $this;
    }

    /**
    * Gets versionUri
    *  版本URI
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 版本URI
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets ignoreDuplicateName
    *  是否忽略名称重复
    *
    * @return bool|null
    */
    public function getIgnoreDuplicateName()
    {
        return $this->container['ignoreDuplicateName'];
    }

    /**
    * Sets ignoreDuplicateName
    *
    * @param bool|null $ignoreDuplicateName 是否忽略名称重复
    *
    * @return $this
    */
    public function setIgnoreDuplicateName($ignoreDuplicateName)
    {
        $this->container['ignoreDuplicateName'] = $ignoreDuplicateName;
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

