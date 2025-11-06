<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestDiffFileDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestDiffFileDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentSha  合并请求head sha
    * submodule  是否为submodule
    * expanded  内容是否扩展
    * diffRefs  diffRefs
    * modeChanged  mode是否修改
    * fileType  文件类型
    * oldPath  旧路径
    * newPath  新路径
    * aMode  旧mode
    * bMode  新mode
    * filePath  文件路径
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  文件变更内容
    * binary  是否为二进制文件
    * tooLarge  是否过大
    * collapsed  是否折叠
    * lineCount  单个文件可取行数范围
    * addedLines  新增行数
    * removedLines  删除行数
    * blobId  文件blob_id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentSha' => 'string',
            'submodule' => 'bool',
            'expanded' => 'bool',
            'diffRefs' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DiffRefsDto',
            'modeChanged' => 'bool',
            'fileType' => 'string',
            'oldPath' => 'string',
            'newPath' => 'string',
            'aMode' => 'string',
            'bMode' => 'string',
            'filePath' => 'string',
            'newFile' => 'bool',
            'renamedFile' => 'bool',
            'deletedFile' => 'bool',
            'diff' => 'string',
            'binary' => 'bool',
            'tooLarge' => 'bool',
            'collapsed' => 'bool',
            'lineCount' => 'int[]',
            'addedLines' => 'int',
            'removedLines' => 'int',
            'blobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentSha  合并请求head sha
    * submodule  是否为submodule
    * expanded  内容是否扩展
    * diffRefs  diffRefs
    * modeChanged  mode是否修改
    * fileType  文件类型
    * oldPath  旧路径
    * newPath  新路径
    * aMode  旧mode
    * bMode  新mode
    * filePath  文件路径
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  文件变更内容
    * binary  是否为二进制文件
    * tooLarge  是否过大
    * collapsed  是否折叠
    * lineCount  单个文件可取行数范围
    * addedLines  新增行数
    * removedLines  删除行数
    * blobId  文件blob_id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentSha' => null,
        'submodule' => null,
        'expanded' => null,
        'diffRefs' => null,
        'modeChanged' => null,
        'fileType' => null,
        'oldPath' => null,
        'newPath' => null,
        'aMode' => null,
        'bMode' => null,
        'filePath' => null,
        'newFile' => null,
        'renamedFile' => null,
        'deletedFile' => null,
        'diff' => null,
        'binary' => null,
        'tooLarge' => null,
        'collapsed' => null,
        'lineCount' => null,
        'addedLines' => null,
        'removedLines' => null,
        'blobId' => null
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
    * contentSha  合并请求head sha
    * submodule  是否为submodule
    * expanded  内容是否扩展
    * diffRefs  diffRefs
    * modeChanged  mode是否修改
    * fileType  文件类型
    * oldPath  旧路径
    * newPath  新路径
    * aMode  旧mode
    * bMode  新mode
    * filePath  文件路径
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  文件变更内容
    * binary  是否为二进制文件
    * tooLarge  是否过大
    * collapsed  是否折叠
    * lineCount  单个文件可取行数范围
    * addedLines  新增行数
    * removedLines  删除行数
    * blobId  文件blob_id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentSha' => 'content_sha',
            'submodule' => 'submodule',
            'expanded' => 'expanded',
            'diffRefs' => 'diff_refs',
            'modeChanged' => 'mode_changed',
            'fileType' => 'file_type',
            'oldPath' => 'old_path',
            'newPath' => 'new_path',
            'aMode' => 'a_mode',
            'bMode' => 'b_mode',
            'filePath' => 'file_path',
            'newFile' => 'new_file',
            'renamedFile' => 'renamed_file',
            'deletedFile' => 'deleted_file',
            'diff' => 'diff',
            'binary' => 'binary',
            'tooLarge' => 'too_large',
            'collapsed' => 'collapsed',
            'lineCount' => 'line_count',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines',
            'blobId' => 'blob_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentSha  合并请求head sha
    * submodule  是否为submodule
    * expanded  内容是否扩展
    * diffRefs  diffRefs
    * modeChanged  mode是否修改
    * fileType  文件类型
    * oldPath  旧路径
    * newPath  新路径
    * aMode  旧mode
    * bMode  新mode
    * filePath  文件路径
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  文件变更内容
    * binary  是否为二进制文件
    * tooLarge  是否过大
    * collapsed  是否折叠
    * lineCount  单个文件可取行数范围
    * addedLines  新增行数
    * removedLines  删除行数
    * blobId  文件blob_id
    *
    * @var string[]
    */
    protected static $setters = [
            'contentSha' => 'setContentSha',
            'submodule' => 'setSubmodule',
            'expanded' => 'setExpanded',
            'diffRefs' => 'setDiffRefs',
            'modeChanged' => 'setModeChanged',
            'fileType' => 'setFileType',
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath',
            'aMode' => 'setAMode',
            'bMode' => 'setBMode',
            'filePath' => 'setFilePath',
            'newFile' => 'setNewFile',
            'renamedFile' => 'setRenamedFile',
            'deletedFile' => 'setDeletedFile',
            'diff' => 'setDiff',
            'binary' => 'setBinary',
            'tooLarge' => 'setTooLarge',
            'collapsed' => 'setCollapsed',
            'lineCount' => 'setLineCount',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines',
            'blobId' => 'setBlobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentSha  合并请求head sha
    * submodule  是否为submodule
    * expanded  内容是否扩展
    * diffRefs  diffRefs
    * modeChanged  mode是否修改
    * fileType  文件类型
    * oldPath  旧路径
    * newPath  新路径
    * aMode  旧mode
    * bMode  新mode
    * filePath  文件路径
    * newFile  是否为新增文件
    * renamedFile  是否为重命名文件
    * deletedFile  是否为删除文件
    * diff  文件变更内容
    * binary  是否为二进制文件
    * tooLarge  是否过大
    * collapsed  是否折叠
    * lineCount  单个文件可取行数范围
    * addedLines  新增行数
    * removedLines  删除行数
    * blobId  文件blob_id
    *
    * @var string[]
    */
    protected static $getters = [
            'contentSha' => 'getContentSha',
            'submodule' => 'getSubmodule',
            'expanded' => 'getExpanded',
            'diffRefs' => 'getDiffRefs',
            'modeChanged' => 'getModeChanged',
            'fileType' => 'getFileType',
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath',
            'aMode' => 'getAMode',
            'bMode' => 'getBMode',
            'filePath' => 'getFilePath',
            'newFile' => 'getNewFile',
            'renamedFile' => 'getRenamedFile',
            'deletedFile' => 'getDeletedFile',
            'diff' => 'getDiff',
            'binary' => 'getBinary',
            'tooLarge' => 'getTooLarge',
            'collapsed' => 'getCollapsed',
            'lineCount' => 'getLineCount',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines',
            'blobId' => 'getBlobId'
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
        $this->container['contentSha'] = isset($data['contentSha']) ? $data['contentSha'] : null;
        $this->container['submodule'] = isset($data['submodule']) ? $data['submodule'] : null;
        $this->container['expanded'] = isset($data['expanded']) ? $data['expanded'] : null;
        $this->container['diffRefs'] = isset($data['diffRefs']) ? $data['diffRefs'] : null;
        $this->container['modeChanged'] = isset($data['modeChanged']) ? $data['modeChanged'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['oldPath'] = isset($data['oldPath']) ? $data['oldPath'] : null;
        $this->container['newPath'] = isset($data['newPath']) ? $data['newPath'] : null;
        $this->container['aMode'] = isset($data['aMode']) ? $data['aMode'] : null;
        $this->container['bMode'] = isset($data['bMode']) ? $data['bMode'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['newFile'] = isset($data['newFile']) ? $data['newFile'] : null;
        $this->container['renamedFile'] = isset($data['renamedFile']) ? $data['renamedFile'] : null;
        $this->container['deletedFile'] = isset($data['deletedFile']) ? $data['deletedFile'] : null;
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
        $this->container['binary'] = isset($data['binary']) ? $data['binary'] : null;
        $this->container['tooLarge'] = isset($data['tooLarge']) ? $data['tooLarge'] : null;
        $this->container['collapsed'] = isset($data['collapsed']) ? $data['collapsed'] : null;
        $this->container['lineCount'] = isset($data['lineCount']) ? $data['lineCount'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
        $this->container['blobId'] = isset($data['blobId']) ? $data['blobId'] : null;
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
    * Gets contentSha
    *  合并请求head sha
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
    * @param string|null $contentSha 合并请求head sha
    *
    * @return $this
    */
    public function setContentSha($contentSha)
    {
        $this->container['contentSha'] = $contentSha;
        return $this;
    }

    /**
    * Gets submodule
    *  是否为submodule
    *
    * @return bool|null
    */
    public function getSubmodule()
    {
        return $this->container['submodule'];
    }

    /**
    * Sets submodule
    *
    * @param bool|null $submodule 是否为submodule
    *
    * @return $this
    */
    public function setSubmodule($submodule)
    {
        $this->container['submodule'] = $submodule;
        return $this;
    }

    /**
    * Gets expanded
    *  内容是否扩展
    *
    * @return bool|null
    */
    public function getExpanded()
    {
        return $this->container['expanded'];
    }

    /**
    * Sets expanded
    *
    * @param bool|null $expanded 内容是否扩展
    *
    * @return $this
    */
    public function setExpanded($expanded)
    {
        $this->container['expanded'] = $expanded;
        return $this;
    }

    /**
    * Gets diffRefs
    *  diffRefs
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DiffRefsDto|null
    */
    public function getDiffRefs()
    {
        return $this->container['diffRefs'];
    }

    /**
    * Sets diffRefs
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DiffRefsDto|null $diffRefs diffRefs
    *
    * @return $this
    */
    public function setDiffRefs($diffRefs)
    {
        $this->container['diffRefs'] = $diffRefs;
        return $this;
    }

    /**
    * Gets modeChanged
    *  mode是否修改
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
    * @param bool|null $modeChanged mode是否修改
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
    * Gets oldPath
    *  旧路径
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
    * @param string|null $oldPath 旧路径
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
    *  新路径
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
    * @param string|null $newPath 新路径
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
    *  旧mode
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
    * @param string|null $aMode 旧mode
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
    *  新mode
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
    * @param string|null $bMode 新mode
    *
    * @return $this
    */
    public function setBMode($bMode)
    {
        $this->container['bMode'] = $bMode;
        return $this;
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
    *  文件变更内容
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
    * @param string|null $diff 文件变更内容
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
    *  是否过大
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
    * @param bool|null $tooLarge 是否过大
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
    *  是否折叠
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
    * @param bool|null $collapsed 是否折叠
    *
    * @return $this
    */
    public function setCollapsed($collapsed)
    {
        $this->container['collapsed'] = $collapsed;
        return $this;
    }

    /**
    * Gets lineCount
    *  单个文件可取行数范围
    *
    * @return int[]|null
    */
    public function getLineCount()
    {
        return $this->container['lineCount'];
    }

    /**
    * Sets lineCount
    *
    * @param int[]|null $lineCount 单个文件可取行数范围
    *
    * @return $this
    */
    public function setLineCount($lineCount)
    {
        $this->container['lineCount'] = $lineCount;
        return $this;
    }

    /**
    * Gets addedLines
    *  新增行数
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
    * @param int|null $addedLines 新增行数
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
    *  删除行数
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
    * @param int|null $removedLines 删除行数
    *
    * @return $this
    */
    public function setRemovedLines($removedLines)
    {
        $this->container['removedLines'] = $removedLines;
        return $this;
    }

    /**
    * Gets blobId
    *  文件blob_id
    *
    * @return string|null
    */
    public function getBlobId()
    {
        return $this->container['blobId'];
    }

    /**
    * Sets blobId
    *
    * @param string|null $blobId 文件blob_id
    *
    * @return $this
    */
    public function setBlobId($blobId)
    {
        $this->container['blobId'] = $blobId;
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

