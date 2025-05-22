<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadAttachmentsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadAttachmentsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  关联id
    * issueId  工作项id
    * projectId  项目id
    * diskFilename  云盘存贮名
    * fileName  文件名
    * size  文件大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'issueId' => 'int',
            'projectId' => 'string',
            'diskFilename' => 'string',
            'fileName' => 'string',
            'size' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  关联id
    * issueId  工作项id
    * projectId  项目id
    * diskFilename  云盘存贮名
    * fileName  文件名
    * size  文件大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'issueId' => 'int32',
        'projectId' => null,
        'diskFilename' => null,
        'fileName' => null,
        'size' => null
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
    * id  关联id
    * issueId  工作项id
    * projectId  项目id
    * diskFilename  云盘存贮名
    * fileName  文件名
    * size  文件大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'issueId' => 'issue_id',
            'projectId' => 'project_id',
            'diskFilename' => 'disk_filename',
            'fileName' => 'file_name',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  关联id
    * issueId  工作项id
    * projectId  项目id
    * diskFilename  云盘存贮名
    * fileName  文件名
    * size  文件大小
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'issueId' => 'setIssueId',
            'projectId' => 'setProjectId',
            'diskFilename' => 'setDiskFilename',
            'fileName' => 'setFileName',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  关联id
    * issueId  工作项id
    * projectId  项目id
    * diskFilename  云盘存贮名
    * fileName  文件名
    * size  文件大小
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'issueId' => 'getIssueId',
            'projectId' => 'getProjectId',
            'diskFilename' => 'getDiskFilename',
            'fileName' => 'getFileName',
            'size' => 'getSize'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['diskFilename'] = isset($data['diskFilename']) ? $data['diskFilename'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
    * Gets id
    *  关联id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 关联id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项id
    *
    * @return int|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param int|null $issueId 工作项id
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets diskFilename
    *  云盘存贮名
    *
    * @return string|null
    */
    public function getDiskFilename()
    {
        return $this->container['diskFilename'];
    }

    /**
    * Sets diskFilename
    *
    * @param string|null $diskFilename 云盘存贮名
    *
    * @return $this
    */
    public function setDiskFilename($diskFilename)
    {
        $this->container['diskFilename'] = $diskFilename;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets size
    *  文件大小
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size 文件大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

