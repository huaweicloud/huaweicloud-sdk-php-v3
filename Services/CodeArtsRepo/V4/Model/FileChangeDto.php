<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileChangeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FileChangeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filePath  文件路径
    * oldPath  变更文件源分支路径
    * newPath  变更文件目标分支路径
    * aMode  旧文件权限
    * bMode  新文件权限
    * modeChanged  文件权限是否变更
    * fileType  文件类型
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  变更文件内容
    * binary  是否为二进制文件
    * tooLarge  是否为大文件
    * collapsed  是否折叠文件
    * addedLines  文件新增行
    * removedLines  文件删除行
    * contentSha  文件最新commitId
    * diffRefs  diffRefs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filePath' => 'string',
            'oldPath' => 'string',
            'newPath' => 'string',
            'aMode' => 'string',
            'bMode' => 'string',
            'modeChanged' => 'bool',
            'fileType' => 'string',
            'newFile' => 'bool',
            'renamedFile' => 'bool',
            'deletedFile' => 'bool',
            'diff' => 'string',
            'binary' => 'bool',
            'tooLarge' => 'bool',
            'collapsed' => 'bool',
            'addedLines' => 'int',
            'removedLines' => 'int',
            'contentSha' => 'string',
            'diffRefs' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffRefDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filePath  文件路径
    * oldPath  变更文件源分支路径
    * newPath  变更文件目标分支路径
    * aMode  旧文件权限
    * bMode  新文件权限
    * modeChanged  文件权限是否变更
    * fileType  文件类型
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  变更文件内容
    * binary  是否为二进制文件
    * tooLarge  是否为大文件
    * collapsed  是否折叠文件
    * addedLines  文件新增行
    * removedLines  文件删除行
    * contentSha  文件最新commitId
    * diffRefs  diffRefs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filePath' => null,
        'oldPath' => null,
        'newPath' => null,
        'aMode' => null,
        'bMode' => null,
        'modeChanged' => null,
        'fileType' => null,
        'newFile' => null,
        'renamedFile' => null,
        'deletedFile' => null,
        'diff' => null,
        'binary' => null,
        'tooLarge' => null,
        'collapsed' => null,
        'addedLines' => null,
        'removedLines' => null,
        'contentSha' => null,
        'diffRefs' => null
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
    * filePath  文件路径
    * oldPath  变更文件源分支路径
    * newPath  变更文件目标分支路径
    * aMode  旧文件权限
    * bMode  新文件权限
    * modeChanged  文件权限是否变更
    * fileType  文件类型
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  变更文件内容
    * binary  是否为二进制文件
    * tooLarge  是否为大文件
    * collapsed  是否折叠文件
    * addedLines  文件新增行
    * removedLines  文件删除行
    * contentSha  文件最新commitId
    * diffRefs  diffRefs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filePath' => 'file_path',
            'oldPath' => 'old_path',
            'newPath' => 'new_path',
            'aMode' => 'a_mode',
            'bMode' => 'b_mode',
            'modeChanged' => 'mode_changed',
            'fileType' => 'file_type',
            'newFile' => 'new_file',
            'renamedFile' => 'renamed_file',
            'deletedFile' => 'deleted_file',
            'diff' => 'diff',
            'binary' => 'binary',
            'tooLarge' => 'too_large',
            'collapsed' => 'collapsed',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines',
            'contentSha' => 'content_sha',
            'diffRefs' => 'diff_refs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filePath  文件路径
    * oldPath  变更文件源分支路径
    * newPath  变更文件目标分支路径
    * aMode  旧文件权限
    * bMode  新文件权限
    * modeChanged  文件权限是否变更
    * fileType  文件类型
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  变更文件内容
    * binary  是否为二进制文件
    * tooLarge  是否为大文件
    * collapsed  是否折叠文件
    * addedLines  文件新增行
    * removedLines  文件删除行
    * contentSha  文件最新commitId
    * diffRefs  diffRefs
    *
    * @var string[]
    */
    protected static $setters = [
            'filePath' => 'setFilePath',
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath',
            'aMode' => 'setAMode',
            'bMode' => 'setBMode',
            'modeChanged' => 'setModeChanged',
            'fileType' => 'setFileType',
            'newFile' => 'setNewFile',
            'renamedFile' => 'setRenamedFile',
            'deletedFile' => 'setDeletedFile',
            'diff' => 'setDiff',
            'binary' => 'setBinary',
            'tooLarge' => 'setTooLarge',
            'collapsed' => 'setCollapsed',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines',
            'contentSha' => 'setContentSha',
            'diffRefs' => 'setDiffRefs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filePath  文件路径
    * oldPath  变更文件源分支路径
    * newPath  变更文件目标分支路径
    * aMode  旧文件权限
    * bMode  新文件权限
    * modeChanged  文件权限是否变更
    * fileType  文件类型
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  变更文件内容
    * binary  是否为二进制文件
    * tooLarge  是否为大文件
    * collapsed  是否折叠文件
    * addedLines  文件新增行
    * removedLines  文件删除行
    * contentSha  文件最新commitId
    * diffRefs  diffRefs
    *
    * @var string[]
    */
    protected static $getters = [
            'filePath' => 'getFilePath',
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath',
            'aMode' => 'getAMode',
            'bMode' => 'getBMode',
            'modeChanged' => 'getModeChanged',
            'fileType' => 'getFileType',
            'newFile' => 'getNewFile',
            'renamedFile' => 'getRenamedFile',
            'deletedFile' => 'getDeletedFile',
            'diff' => 'getDiff',
            'binary' => 'getBinary',
            'tooLarge' => 'getTooLarge',
            'collapsed' => 'getCollapsed',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines',
            'contentSha' => 'getContentSha',
            'diffRefs' => 'getDiffRefs'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['oldPath'] = isset($data['oldPath']) ? $data['oldPath'] : null;
        $this->container['newPath'] = isset($data['newPath']) ? $data['newPath'] : null;
        $this->container['aMode'] = isset($data['aMode']) ? $data['aMode'] : null;
        $this->container['bMode'] = isset($data['bMode']) ? $data['bMode'] : null;
        $this->container['modeChanged'] = isset($data['modeChanged']) ? $data['modeChanged'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['newFile'] = isset($data['newFile']) ? $data['newFile'] : null;
        $this->container['renamedFile'] = isset($data['renamedFile']) ? $data['renamedFile'] : null;
        $this->container['deletedFile'] = isset($data['deletedFile']) ? $data['deletedFile'] : null;
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
        $this->container['binary'] = isset($data['binary']) ? $data['binary'] : null;
        $this->container['tooLarge'] = isset($data['tooLarge']) ? $data['tooLarge'] : null;
        $this->container['collapsed'] = isset($data['collapsed']) ? $data['collapsed'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
        $this->container['contentSha'] = isset($data['contentSha']) ? $data['contentSha'] : null;
        $this->container['diffRefs'] = isset($data['diffRefs']) ? $data['diffRefs'] : null;
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
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets oldPath
    *  变更文件源分支路径
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
    * @param string|null $oldPath 变更文件源分支路径
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
    *  变更文件目标分支路径
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
    * @param string|null $newPath 变更文件目标分支路径
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
    *  旧文件权限
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
    * @param string|null $aMode 旧文件权限
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
    *  新文件权限
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
    * @param string|null $bMode 新文件权限
    *
    * @return $this
    */
    public function setBMode($bMode)
    {
        $this->container['bMode'] = $bMode;
        return $this;
    }

    /**
    * Gets modeChanged
    *  文件权限是否变更
    *
    * @return bool|null
    */
    public function getModeChanged()
    {
        return $this->container['modeChanged'];
    }

    /**
    * Sets modeChanged
    *
    * @param bool|null $modeChanged 文件权限是否变更
    *
    * @return $this
    */
    public function setModeChanged($modeChanged)
    {
        $this->container['modeChanged'] = $modeChanged;
        return $this;
    }

    /**
    * Gets fileType
    *  文件类型
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 文件类型
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets newFile
    *  是否为新增文件
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
    * @param bool|null $newFile 是否为新增文件
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
    *  是否为重命名文件
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
    * @param bool|null $renamedFile 是否为重命名文件
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
    *  是否为删除文件
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
    * @param bool|null $deletedFile 是否为删除文件
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
    *  变更文件内容
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
    * @param string|null $diff 变更文件内容
    *
    * @return $this
    */
    public function setDiff($diff)
    {
        $this->container['diff'] = $diff;
        return $this;
    }

    /**
    * Gets binary
    *  是否为二进制文件
    *
    * @return bool|null
    */
    public function getBinary()
    {
        return $this->container['binary'];
    }

    /**
    * Sets binary
    *
    * @param bool|null $binary 是否为二进制文件
    *
    * @return $this
    */
    public function setBinary($binary)
    {
        $this->container['binary'] = $binary;
        return $this;
    }

    /**
    * Gets tooLarge
    *  是否为大文件
    *
    * @return bool|null
    */
    public function getTooLarge()
    {
        return $this->container['tooLarge'];
    }

    /**
    * Sets tooLarge
    *
    * @param bool|null $tooLarge 是否为大文件
    *
    * @return $this
    */
    public function setTooLarge($tooLarge)
    {
        $this->container['tooLarge'] = $tooLarge;
        return $this;
    }

    /**
    * Gets collapsed
    *  是否折叠文件
    *
    * @return bool|null
    */
    public function getCollapsed()
    {
        return $this->container['collapsed'];
    }

    /**
    * Sets collapsed
    *
    * @param bool|null $collapsed 是否折叠文件
    *
    * @return $this
    */
    public function setCollapsed($collapsed)
    {
        $this->container['collapsed'] = $collapsed;
        return $this;
    }

    /**
    * Gets addedLines
    *  文件新增行
    *
    * @return int|null
    */
    public function getAddedLines()
    {
        return $this->container['addedLines'];
    }

    /**
    * Sets addedLines
    *
    * @param int|null $addedLines 文件新增行
    *
    * @return $this
    */
    public function setAddedLines($addedLines)
    {
        $this->container['addedLines'] = $addedLines;
        return $this;
    }

    /**
    * Gets removedLines
    *  文件删除行
    *
    * @return int|null
    */
    public function getRemovedLines()
    {
        return $this->container['removedLines'];
    }

    /**
    * Sets removedLines
    *
    * @param int|null $removedLines 文件删除行
    *
    * @return $this
    */
    public function setRemovedLines($removedLines)
    {
        $this->container['removedLines'] = $removedLines;
        return $this;
    }

    /**
    * Gets contentSha
    *  文件最新commitId
    *
    * @return string|null
    */
    public function getContentSha()
    {
        return $this->container['contentSha'];
    }

    /**
    * Sets contentSha
    *
    * @param string|null $contentSha 文件最新commitId
    *
    * @return $this
    */
    public function setContentSha($contentSha)
    {
        $this->container['contentSha'] = $contentSha;
        return $this;
    }

    /**
    * Gets diffRefs
    *  diffRefs
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffRefDto|null
    */
    public function getDiffRefs()
    {
        return $this->container['diffRefs'];
    }

    /**
    * Sets diffRefs
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DiffRefDto|null $diffRefs diffRefs
    *
    * @return $this
    */
    public function setDiffRefs($diffRefs)
    {
        $this->container['diffRefs'] = $diffRefs;
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

