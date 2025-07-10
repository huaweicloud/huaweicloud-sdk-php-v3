<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepoMembersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepoMembersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageIndex  第几页
    * pageSize  每页显示size
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * subject  搜索关键字
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'repositoryUuid' => 'string',
            'subject' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageIndex  第几页
    * pageSize  每页显示size
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * subject  搜索关键字
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageIndex' => 'int32',
        'pageSize' => 'int32',
        'repositoryUuid' => null,
        'subject' => null
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
    * pageIndex  第几页
    * pageSize  每页显示size
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * subject  搜索关键字
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'repositoryUuid' => 'repository_uuid',
            'subject' => 'subject'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageIndex  第几页
    * pageSize  每页显示size
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * subject  搜索关键字
    *
    * @var string[]
    */
    protected static $setters = [
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'repositoryUuid' => 'setRepositoryUuid',
            'subject' => 'setSubject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageIndex  第几页
    * pageSize  每页显示size
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * subject  搜索关键字
    *
    * @var string[]
    */
    protected static $getters = [
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'repositoryUuid' => 'getRepositoryUuid',
            'subject' => 'getSubject'
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
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['repositoryUuid'] = isset($data['repositoryUuid']) ? $data['repositoryUuid'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryUuid'] === null) {
            $invalidProperties[] = "'repositoryUuid' can't be null";
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
    * Gets pageIndex
    *  第几页
    *
    * @return int|null
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param int|null $pageIndex 第几页
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页显示size
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页显示size
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets repositoryUuid
    *  仓库uuid(由CreateRepository接口返回)
    *
    * @return string
    */
    public function getRepositoryUuid()
    {
        return $this->container['repositoryUuid'];
    }

    /**
    * Sets repositoryUuid
    *
    * @param string $repositoryUuid 仓库uuid(由CreateRepository接口返回)
    *
    * @return $this
    */
    public function setRepositoryUuid($repositoryUuid)
    {
        $this->container['repositoryUuid'] = $repositoryUuid;
        return $this;
    }

    /**
    * Gets subject
    *  搜索关键字
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 搜索关键字
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
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

