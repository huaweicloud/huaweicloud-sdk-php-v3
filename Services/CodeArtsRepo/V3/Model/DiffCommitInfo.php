<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiffCommitInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiffCommitInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldPath  变更前文件路径
    * newPath  变更后文件路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * newFile  此次变更是否新增文件
    * renamedFile  此次变更是否重命名文件
    * deletedFile  此次变更是否删除文件
    * diff  差异信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldPath' => 'string',
            'newPath' => 'string',
            'aMode' => 'string',
            'bMode' => 'string',
            'newFile' => 'bool',
            'renamedFile' => 'bool',
            'deletedFile' => 'bool',
            'diff' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldPath  变更前文件路径
    * newPath  变更后文件路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * newFile  此次变更是否新增文件
    * renamedFile  此次变更是否重命名文件
    * deletedFile  此次变更是否删除文件
    * diff  差异信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldPath' => null,
        'newPath' => null,
        'aMode' => null,
        'bMode' => null,
        'newFile' => null,
        'renamedFile' => null,
        'deletedFile' => null,
        'diff' => null
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
    * oldPath  变更前文件路径
    * newPath  变更后文件路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * newFile  此次变更是否新增文件
    * renamedFile  此次变更是否重命名文件
    * deletedFile  此次变更是否删除文件
    * diff  差异信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldPath' => 'old_path',
            'newPath' => 'new_path',
            'aMode' => 'a_mode',
            'bMode' => 'b_mode',
            'newFile' => 'new_file',
            'renamedFile' => 'renamed_file',
            'deletedFile' => 'deleted_file',
            'diff' => 'diff'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldPath  变更前文件路径
    * newPath  变更后文件路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * newFile  此次变更是否新增文件
    * renamedFile  此次变更是否重命名文件
    * deletedFile  此次变更是否删除文件
    * diff  差异信息
    *
    * @var string[]
    */
    protected static $setters = [
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath',
            'aMode' => 'setAMode',
            'bMode' => 'setBMode',
            'newFile' => 'setNewFile',
            'renamedFile' => 'setRenamedFile',
            'deletedFile' => 'setDeletedFile',
            'diff' => 'setDiff'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldPath  变更前文件路径
    * newPath  变更后文件路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * newFile  此次变更是否新增文件
    * renamedFile  此次变更是否重命名文件
    * deletedFile  此次变更是否删除文件
    * diff  差异信息
    *
    * @var string[]
    */
    protected static $getters = [
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath',
            'aMode' => 'getAMode',
            'bMode' => 'getBMode',
            'newFile' => 'getNewFile',
            'renamedFile' => 'getRenamedFile',
            'deletedFile' => 'getDeletedFile',
            'diff' => 'getDiff'
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
        $this->container['oldPath'] = isset($data['oldPath']) ? $data['oldPath'] : null;
        $this->container['newPath'] = isset($data['newPath']) ? $data['newPath'] : null;
        $this->container['aMode'] = isset($data['aMode']) ? $data['aMode'] : null;
        $this->container['bMode'] = isset($data['bMode']) ? $data['bMode'] : null;
        $this->container['newFile'] = isset($data['newFile']) ? $data['newFile'] : null;
        $this->container['renamedFile'] = isset($data['renamedFile']) ? $data['renamedFile'] : null;
        $this->container['deletedFile'] = isset($data['deletedFile']) ? $data['deletedFile'] : null;
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
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
    * Gets oldPath
    *  变更前文件路径
    *
    * @return string|null
    */
    public function getOldPath()
    {
        return $this->container['oldPath'];
    }

    /**
    * Sets oldPath
    *
    * @param string|null $oldPath 变更前文件路径
    *
    * @return $this
    */
    public function setOldPath($oldPath)
    {
        $this->container['oldPath'] = $oldPath;
        return $this;
    }

    /**
    * Gets newPath
    *  变更后文件路径
    *
    * @return string|null
    */
    public function getNewPath()
    {
        return $this->container['newPath'];
    }

    /**
    * Sets newPath
    *
    * @param string|null $newPath 变更后文件路径
    *
    * @return $this
    */
    public function setNewPath($newPath)
    {
        $this->container['newPath'] = $newPath;
        return $this;
    }

    /**
    * Gets aMode
    *  变更前文件模式
    *
    * @return string|null
    */
    public function getAMode()
    {
        return $this->container['aMode'];
    }

    /**
    * Sets aMode
    *
    * @param string|null $aMode 变更前文件模式
    *
    * @return $this
    */
    public function setAMode($aMode)
    {
        $this->container['aMode'] = $aMode;
        return $this;
    }

    /**
    * Gets bMode
    *  变更后文件模式
    *
    * @return string|null
    */
    public function getBMode()
    {
        return $this->container['bMode'];
    }

    /**
    * Sets bMode
    *
    * @param string|null $bMode 变更后文件模式
    *
    * @return $this
    */
    public function setBMode($bMode)
    {
        $this->container['bMode'] = $bMode;
        return $this;
    }

    /**
    * Gets newFile
    *  此次变更是否新增文件
    *
    * @return bool|null
    */
    public function getNewFile()
    {
        return $this->container['newFile'];
    }

    /**
    * Sets newFile
    *
    * @param bool|null $newFile 此次变更是否新增文件
    *
    * @return $this
    */
    public function setNewFile($newFile)
    {
        $this->container['newFile'] = $newFile;
        return $this;
    }

    /**
    * Gets renamedFile
    *  此次变更是否重命名文件
    *
    * @return bool|null
    */
    public function getRenamedFile()
    {
        return $this->container['renamedFile'];
    }

    /**
    * Sets renamedFile
    *
    * @param bool|null $renamedFile 此次变更是否重命名文件
    *
    * @return $this
    */
    public function setRenamedFile($renamedFile)
    {
        $this->container['renamedFile'] = $renamedFile;
        return $this;
    }

    /**
    * Gets deletedFile
    *  此次变更是否删除文件
    *
    * @return bool|null
    */
    public function getDeletedFile()
    {
        return $this->container['deletedFile'];
    }

    /**
    * Sets deletedFile
    *
    * @param bool|null $deletedFile 此次变更是否删除文件
    *
    * @return $this
    */
    public function setDeletedFile($deletedFile)
    {
        $this->container['deletedFile'] = $deletedFile;
        return $this;
    }

    /**
    * Gets diff
    *  差异信息
    *
    * @return string|null
    */
    public function getDiff()
    {
        return $this->container['diff'];
    }

    /**
    * Sets diff
    *
    * @param string|null $diff 差异信息
    *
    * @return $this
    */
    public function setDiff($diff)
    {
        $this->container['diff'] = $diff;
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

