<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackupDownloadLinkResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackupDownloadLinkResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * files  备份文件信息。
    * bucket  OBS桶名。
    * groupId  组ID。
    * groupName  组名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'files' => '\HuaweiCloud\SDK\Dds\V3\Model\GetBackupDownloadLinkResponseBodyFiles[]',
            'bucket' => 'string',
            'groupId' => 'string',
            'groupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * files  备份文件信息。
    * bucket  OBS桶名。
    * groupId  组ID。
    * groupName  组名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'files' => null,
        'bucket' => null,
        'groupId' => null,
        'groupName' => null
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
    * files  备份文件信息。
    * bucket  OBS桶名。
    * groupId  组ID。
    * groupName  组名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'files' => 'files',
            'bucket' => 'bucket',
            'groupId' => 'group_id',
            'groupName' => 'group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * files  备份文件信息。
    * bucket  OBS桶名。
    * groupId  组ID。
    * groupName  组名。
    *
    * @var string[]
    */
    protected static $setters = [
            'files' => 'setFiles',
            'bucket' => 'setBucket',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * files  备份文件信息。
    * bucket  OBS桶名。
    * groupId  组ID。
    * groupName  组名。
    *
    * @var string[]
    */
    protected static $getters = [
            'files' => 'getFiles',
            'bucket' => 'getBucket',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName'
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
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
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
    * Gets files
    *  备份文件信息。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\GetBackupDownloadLinkResponseBodyFiles[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\GetBackupDownloadLinkResponseBodyFiles[]|null $files 备份文件信息。
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
        return $this;
    }

    /**
    * Gets bucket
    *  OBS桶名。
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket OBS桶名。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets groupId
    *  组ID。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 组ID。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  组名。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 组名。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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

