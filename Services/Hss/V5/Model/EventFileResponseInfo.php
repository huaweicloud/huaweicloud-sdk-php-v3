<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventFileResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventFileResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAlias  **参数解释**： 文件别名 **取值范围**： 字符长度1-256位
    * fileSize  **参数解释**： 文件大小 **取值范围**： 最小值0，最大值2147483647
    * fileMtime  **参数解释**： 文件最后一次修改时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileAtime  **参数解释**： 文件最后一次访问时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileCtime  **参数解释**： 文件最后一次状态改变时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileHash  **参数解释**： 文件hash,当前为sha256 **取值范围**： 字符长度1-256位
    * fileMd5  **参数解释**： 文件md5 **取值范围**： 字符长度1-256位
    * fileSha256  **参数解释**： 文件sha256 **取值范围**： 字符长度1-256位
    * fileType  **参数解释**： 文件类型 **取值范围**： 字符长度1-256位
    * fileContent  **参数解释**： 文件内容 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * fileOperation  **参数解释**： 文件操作类型 **取值范围**： 最小值0，最大值2147483647
    * fileAction  **参数解释**： 文件动作 **取值范围**： 字符长度1-256位
    * fileChangeAttr  **参数解释**： 变更前后的属性 **取值范围**： 字符长度1-256位
    * fileNewPath  **参数解释**： 新文件路径 **取值范围**： 字符长度1-256位
    * fileDesc  **参数解释**： 文件描述 **取值范围**： 字符长度1-256位
    * fileKeyWord  **参数解释**： 文件关键字 **取值范围**： 字符长度1-256位
    * isDir  **参数解释**： 是否目录 **取值范围**： - true：是目录 - false：不是目录
    * fdInfo  **参数解释**： 文件句柄信息 **取值范围**： 字符长度1-256位
    * fdCount  **参数解释**： 文件句柄数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filePath' => 'string',
            'fileAlias' => 'string',
            'fileSize' => 'int',
            'fileMtime' => 'int',
            'fileAtime' => 'int',
            'fileCtime' => 'int',
            'fileHash' => 'string',
            'fileMd5' => 'string',
            'fileSha256' => 'string',
            'fileType' => 'string',
            'fileContent' => 'string',
            'fileAttr' => 'string',
            'fileOperation' => 'int',
            'fileAction' => 'string',
            'fileChangeAttr' => 'string',
            'fileNewPath' => 'string',
            'fileDesc' => 'string',
            'fileKeyWord' => 'string',
            'isDir' => 'bool',
            'fdInfo' => 'string',
            'fdCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAlias  **参数解释**： 文件别名 **取值范围**： 字符长度1-256位
    * fileSize  **参数解释**： 文件大小 **取值范围**： 最小值0，最大值2147483647
    * fileMtime  **参数解释**： 文件最后一次修改时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileAtime  **参数解释**： 文件最后一次访问时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileCtime  **参数解释**： 文件最后一次状态改变时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileHash  **参数解释**： 文件hash,当前为sha256 **取值范围**： 字符长度1-256位
    * fileMd5  **参数解释**： 文件md5 **取值范围**： 字符长度1-256位
    * fileSha256  **参数解释**： 文件sha256 **取值范围**： 字符长度1-256位
    * fileType  **参数解释**： 文件类型 **取值范围**： 字符长度1-256位
    * fileContent  **参数解释**： 文件内容 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * fileOperation  **参数解释**： 文件操作类型 **取值范围**： 最小值0，最大值2147483647
    * fileAction  **参数解释**： 文件动作 **取值范围**： 字符长度1-256位
    * fileChangeAttr  **参数解释**： 变更前后的属性 **取值范围**： 字符长度1-256位
    * fileNewPath  **参数解释**： 新文件路径 **取值范围**： 字符长度1-256位
    * fileDesc  **参数解释**： 文件描述 **取值范围**： 字符长度1-256位
    * fileKeyWord  **参数解释**： 文件关键字 **取值范围**： 字符长度1-256位
    * isDir  **参数解释**： 是否目录 **取值范围**： - true：是目录 - false：不是目录
    * fdInfo  **参数解释**： 文件句柄信息 **取值范围**： 字符长度1-256位
    * fdCount  **参数解释**： 文件句柄数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filePath' => null,
        'fileAlias' => null,
        'fileSize' => 'int32',
        'fileMtime' => 'int64',
        'fileAtime' => 'int64',
        'fileCtime' => 'int64',
        'fileHash' => null,
        'fileMd5' => null,
        'fileSha256' => null,
        'fileType' => null,
        'fileContent' => null,
        'fileAttr' => null,
        'fileOperation' => 'int32',
        'fileAction' => null,
        'fileChangeAttr' => null,
        'fileNewPath' => null,
        'fileDesc' => null,
        'fileKeyWord' => null,
        'isDir' => null,
        'fdInfo' => null,
        'fdCount' => 'int32'
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
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAlias  **参数解释**： 文件别名 **取值范围**： 字符长度1-256位
    * fileSize  **参数解释**： 文件大小 **取值范围**： 最小值0，最大值2147483647
    * fileMtime  **参数解释**： 文件最后一次修改时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileAtime  **参数解释**： 文件最后一次访问时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileCtime  **参数解释**： 文件最后一次状态改变时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileHash  **参数解释**： 文件hash,当前为sha256 **取值范围**： 字符长度1-256位
    * fileMd5  **参数解释**： 文件md5 **取值范围**： 字符长度1-256位
    * fileSha256  **参数解释**： 文件sha256 **取值范围**： 字符长度1-256位
    * fileType  **参数解释**： 文件类型 **取值范围**： 字符长度1-256位
    * fileContent  **参数解释**： 文件内容 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * fileOperation  **参数解释**： 文件操作类型 **取值范围**： 最小值0，最大值2147483647
    * fileAction  **参数解释**： 文件动作 **取值范围**： 字符长度1-256位
    * fileChangeAttr  **参数解释**： 变更前后的属性 **取值范围**： 字符长度1-256位
    * fileNewPath  **参数解释**： 新文件路径 **取值范围**： 字符长度1-256位
    * fileDesc  **参数解释**： 文件描述 **取值范围**： 字符长度1-256位
    * fileKeyWord  **参数解释**： 文件关键字 **取值范围**： 字符长度1-256位
    * isDir  **参数解释**： 是否目录 **取值范围**： - true：是目录 - false：不是目录
    * fdInfo  **参数解释**： 文件句柄信息 **取值范围**： 字符长度1-256位
    * fdCount  **参数解释**： 文件句柄数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filePath' => 'file_path',
            'fileAlias' => 'file_alias',
            'fileSize' => 'file_size',
            'fileMtime' => 'file_mtime',
            'fileAtime' => 'file_atime',
            'fileCtime' => 'file_ctime',
            'fileHash' => 'file_hash',
            'fileMd5' => 'file_md5',
            'fileSha256' => 'file_sha256',
            'fileType' => 'file_type',
            'fileContent' => 'file_content',
            'fileAttr' => 'file_attr',
            'fileOperation' => 'file_operation',
            'fileAction' => 'file_action',
            'fileChangeAttr' => 'file_change_attr',
            'fileNewPath' => 'file_new_path',
            'fileDesc' => 'file_desc',
            'fileKeyWord' => 'file_key_word',
            'isDir' => 'is_dir',
            'fdInfo' => 'fd_info',
            'fdCount' => 'fd_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAlias  **参数解释**： 文件别名 **取值范围**： 字符长度1-256位
    * fileSize  **参数解释**： 文件大小 **取值范围**： 最小值0，最大值2147483647
    * fileMtime  **参数解释**： 文件最后一次修改时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileAtime  **参数解释**： 文件最后一次访问时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileCtime  **参数解释**： 文件最后一次状态改变时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileHash  **参数解释**： 文件hash,当前为sha256 **取值范围**： 字符长度1-256位
    * fileMd5  **参数解释**： 文件md5 **取值范围**： 字符长度1-256位
    * fileSha256  **参数解释**： 文件sha256 **取值范围**： 字符长度1-256位
    * fileType  **参数解释**： 文件类型 **取值范围**： 字符长度1-256位
    * fileContent  **参数解释**： 文件内容 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * fileOperation  **参数解释**： 文件操作类型 **取值范围**： 最小值0，最大值2147483647
    * fileAction  **参数解释**： 文件动作 **取值范围**： 字符长度1-256位
    * fileChangeAttr  **参数解释**： 变更前后的属性 **取值范围**： 字符长度1-256位
    * fileNewPath  **参数解释**： 新文件路径 **取值范围**： 字符长度1-256位
    * fileDesc  **参数解释**： 文件描述 **取值范围**： 字符长度1-256位
    * fileKeyWord  **参数解释**： 文件关键字 **取值范围**： 字符长度1-256位
    * isDir  **参数解释**： 是否目录 **取值范围**： - true：是目录 - false：不是目录
    * fdInfo  **参数解释**： 文件句柄信息 **取值范围**： 字符长度1-256位
    * fdCount  **参数解释**： 文件句柄数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'filePath' => 'setFilePath',
            'fileAlias' => 'setFileAlias',
            'fileSize' => 'setFileSize',
            'fileMtime' => 'setFileMtime',
            'fileAtime' => 'setFileAtime',
            'fileCtime' => 'setFileCtime',
            'fileHash' => 'setFileHash',
            'fileMd5' => 'setFileMd5',
            'fileSha256' => 'setFileSha256',
            'fileType' => 'setFileType',
            'fileContent' => 'setFileContent',
            'fileAttr' => 'setFileAttr',
            'fileOperation' => 'setFileOperation',
            'fileAction' => 'setFileAction',
            'fileChangeAttr' => 'setFileChangeAttr',
            'fileNewPath' => 'setFileNewPath',
            'fileDesc' => 'setFileDesc',
            'fileKeyWord' => 'setFileKeyWord',
            'isDir' => 'setIsDir',
            'fdInfo' => 'setFdInfo',
            'fdCount' => 'setFdCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAlias  **参数解释**： 文件别名 **取值范围**： 字符长度1-256位
    * fileSize  **参数解释**： 文件大小 **取值范围**： 最小值0，最大值2147483647
    * fileMtime  **参数解释**： 文件最后一次修改时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileAtime  **参数解释**： 文件最后一次访问时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileCtime  **参数解释**： 文件最后一次状态改变时间 **取值范围**： 最小值0，最大值9223372036854775807
    * fileHash  **参数解释**： 文件hash,当前为sha256 **取值范围**： 字符长度1-256位
    * fileMd5  **参数解释**： 文件md5 **取值范围**： 字符长度1-256位
    * fileSha256  **参数解释**： 文件sha256 **取值范围**： 字符长度1-256位
    * fileType  **参数解释**： 文件类型 **取值范围**： 字符长度1-256位
    * fileContent  **参数解释**： 文件内容 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    * fileOperation  **参数解释**： 文件操作类型 **取值范围**： 最小值0，最大值2147483647
    * fileAction  **参数解释**： 文件动作 **取值范围**： 字符长度1-256位
    * fileChangeAttr  **参数解释**： 变更前后的属性 **取值范围**： 字符长度1-256位
    * fileNewPath  **参数解释**： 新文件路径 **取值范围**： 字符长度1-256位
    * fileDesc  **参数解释**： 文件描述 **取值范围**： 字符长度1-256位
    * fileKeyWord  **参数解释**： 文件关键字 **取值范围**： 字符长度1-256位
    * isDir  **参数解释**： 是否目录 **取值范围**： - true：是目录 - false：不是目录
    * fdInfo  **参数解释**： 文件句柄信息 **取值范围**： 字符长度1-256位
    * fdCount  **参数解释**： 文件句柄数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'filePath' => 'getFilePath',
            'fileAlias' => 'getFileAlias',
            'fileSize' => 'getFileSize',
            'fileMtime' => 'getFileMtime',
            'fileAtime' => 'getFileAtime',
            'fileCtime' => 'getFileCtime',
            'fileHash' => 'getFileHash',
            'fileMd5' => 'getFileMd5',
            'fileSha256' => 'getFileSha256',
            'fileType' => 'getFileType',
            'fileContent' => 'getFileContent',
            'fileAttr' => 'getFileAttr',
            'fileOperation' => 'getFileOperation',
            'fileAction' => 'getFileAction',
            'fileChangeAttr' => 'getFileChangeAttr',
            'fileNewPath' => 'getFileNewPath',
            'fileDesc' => 'getFileDesc',
            'fileKeyWord' => 'getFileKeyWord',
            'isDir' => 'getIsDir',
            'fdInfo' => 'getFdInfo',
            'fdCount' => 'getFdCount'
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
        $this->container['fileAlias'] = isset($data['fileAlias']) ? $data['fileAlias'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileMtime'] = isset($data['fileMtime']) ? $data['fileMtime'] : null;
        $this->container['fileAtime'] = isset($data['fileAtime']) ? $data['fileAtime'] : null;
        $this->container['fileCtime'] = isset($data['fileCtime']) ? $data['fileCtime'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['fileMd5'] = isset($data['fileMd5']) ? $data['fileMd5'] : null;
        $this->container['fileSha256'] = isset($data['fileSha256']) ? $data['fileSha256'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['fileContent'] = isset($data['fileContent']) ? $data['fileContent'] : null;
        $this->container['fileAttr'] = isset($data['fileAttr']) ? $data['fileAttr'] : null;
        $this->container['fileOperation'] = isset($data['fileOperation']) ? $data['fileOperation'] : null;
        $this->container['fileAction'] = isset($data['fileAction']) ? $data['fileAction'] : null;
        $this->container['fileChangeAttr'] = isset($data['fileChangeAttr']) ? $data['fileChangeAttr'] : null;
        $this->container['fileNewPath'] = isset($data['fileNewPath']) ? $data['fileNewPath'] : null;
        $this->container['fileDesc'] = isset($data['fileDesc']) ? $data['fileDesc'] : null;
        $this->container['fileKeyWord'] = isset($data['fileKeyWord']) ? $data['fileKeyWord'] : null;
        $this->container['isDir'] = isset($data['isDir']) ? $data['isDir'] : null;
        $this->container['fdInfo'] = isset($data['fdInfo']) ? $data['fdInfo'] : null;
        $this->container['fdCount'] = isset($data['fdCount']) ? $data['fdCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['filePath']) && !preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileAlias']) && !preg_match("/^.*$/", $this->container['fileAlias'])) {
                $invalidProperties[] = "invalid value for 'fileAlias', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileMtime']) && ($this->container['fileMtime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fileMtime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fileMtime']) && ($this->container['fileMtime'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileMtime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileAtime']) && ($this->container['fileAtime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fileAtime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fileAtime']) && ($this->container['fileAtime'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileAtime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileCtime']) && ($this->container['fileCtime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fileCtime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fileCtime']) && ($this->container['fileCtime'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileCtime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileHash']) && !preg_match("/^.*$/", $this->container['fileHash'])) {
                $invalidProperties[] = "invalid value for 'fileHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileMd5']) && !preg_match("/^.*$/", $this->container['fileMd5'])) {
                $invalidProperties[] = "invalid value for 'fileMd5', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileSha256']) && !preg_match("/^.*$/", $this->container['fileSha256'])) {
                $invalidProperties[] = "invalid value for 'fileSha256', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileType']) && !preg_match("/^.*$/", $this->container['fileType'])) {
                $invalidProperties[] = "invalid value for 'fileType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileContent']) && !preg_match("/^.*$/", $this->container['fileContent'])) {
                $invalidProperties[] = "invalid value for 'fileContent', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileAttr']) && !preg_match("/^.*$/", $this->container['fileAttr'])) {
                $invalidProperties[] = "invalid value for 'fileAttr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileOperation']) && ($this->container['fileOperation'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fileOperation', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fileOperation']) && ($this->container['fileOperation'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileOperation', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileAction']) && !preg_match("/^.*$/", $this->container['fileAction'])) {
                $invalidProperties[] = "invalid value for 'fileAction', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileChangeAttr']) && !preg_match("/^.*$/", $this->container['fileChangeAttr'])) {
                $invalidProperties[] = "invalid value for 'fileChangeAttr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileNewPath']) && !preg_match("/^.*$/", $this->container['fileNewPath'])) {
                $invalidProperties[] = "invalid value for 'fileNewPath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileDesc']) && !preg_match("/^.*$/", $this->container['fileDesc'])) {
                $invalidProperties[] = "invalid value for 'fileDesc', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileKeyWord']) && !preg_match("/^.*$/", $this->container['fileKeyWord'])) {
                $invalidProperties[] = "invalid value for 'fileKeyWord', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fdInfo']) && !preg_match("/^.*$/", $this->container['fdInfo'])) {
                $invalidProperties[] = "invalid value for 'fdInfo', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fdCount']) && ($this->container['fdCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fdCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fdCount']) && ($this->container['fdCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'fdCount', must be bigger than or equal to 0.";
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
    * Gets filePath
    *  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
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
    * @param string|null $filePath **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileAlias
    *  **参数解释**： 文件别名 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileAlias()
    {
        return $this->container['fileAlias'];
    }

    /**
    * Sets fileAlias
    *
    * @param string|null $fileAlias **参数解释**： 文件别名 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileAlias($fileAlias)
    {
        $this->container['fileAlias'] = $fileAlias;
        return $this;
    }

    /**
    * Gets fileSize
    *  **参数解释**： 文件大小 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize **参数解释**： 文件大小 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets fileMtime
    *  **参数解释**： 文件最后一次修改时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getFileMtime()
    {
        return $this->container['fileMtime'];
    }

    /**
    * Sets fileMtime
    *
    * @param int|null $fileMtime **参数解释**： 文件最后一次修改时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setFileMtime($fileMtime)
    {
        $this->container['fileMtime'] = $fileMtime;
        return $this;
    }

    /**
    * Gets fileAtime
    *  **参数解释**： 文件最后一次访问时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getFileAtime()
    {
        return $this->container['fileAtime'];
    }

    /**
    * Sets fileAtime
    *
    * @param int|null $fileAtime **参数解释**： 文件最后一次访问时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setFileAtime($fileAtime)
    {
        $this->container['fileAtime'] = $fileAtime;
        return $this;
    }

    /**
    * Gets fileCtime
    *  **参数解释**： 文件最后一次状态改变时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getFileCtime()
    {
        return $this->container['fileCtime'];
    }

    /**
    * Sets fileCtime
    *
    * @param int|null $fileCtime **参数解释**： 文件最后一次状态改变时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setFileCtime($fileCtime)
    {
        $this->container['fileCtime'] = $fileCtime;
        return $this;
    }

    /**
    * Gets fileHash
    *  **参数解释**： 文件hash,当前为sha256 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
    * Sets fileHash
    *
    * @param string|null $fileHash **参数解释**： 文件hash,当前为sha256 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets fileMd5
    *  **参数解释**： 文件md5 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileMd5()
    {
        return $this->container['fileMd5'];
    }

    /**
    * Sets fileMd5
    *
    * @param string|null $fileMd5 **参数解释**： 文件md5 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileMd5($fileMd5)
    {
        $this->container['fileMd5'] = $fileMd5;
        return $this;
    }

    /**
    * Gets fileSha256
    *  **参数解释**： 文件sha256 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileSha256()
    {
        return $this->container['fileSha256'];
    }

    /**
    * Sets fileSha256
    *
    * @param string|null $fileSha256 **参数解释**： 文件sha256 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileSha256($fileSha256)
    {
        $this->container['fileSha256'] = $fileSha256;
        return $this;
    }

    /**
    * Gets fileType
    *  **参数解释**： 文件类型 **取值范围**： 字符长度1-256位
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
    * @param string|null $fileType **参数解释**： 文件类型 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets fileContent
    *  **参数解释**： 文件内容 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileContent()
    {
        return $this->container['fileContent'];
    }

    /**
    * Sets fileContent
    *
    * @param string|null $fileContent **参数解释**： 文件内容 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileContent($fileContent)
    {
        $this->container['fileContent'] = $fileContent;
        return $this;
    }

    /**
    * Gets fileAttr
    *  **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileAttr()
    {
        return $this->container['fileAttr'];
    }

    /**
    * Sets fileAttr
    *
    * @param string|null $fileAttr **参数解释**： 文件属性 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileAttr($fileAttr)
    {
        $this->container['fileAttr'] = $fileAttr;
        return $this;
    }

    /**
    * Gets fileOperation
    *  **参数解释**： 文件操作类型 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getFileOperation()
    {
        return $this->container['fileOperation'];
    }

    /**
    * Sets fileOperation
    *
    * @param int|null $fileOperation **参数解释**： 文件操作类型 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setFileOperation($fileOperation)
    {
        $this->container['fileOperation'] = $fileOperation;
        return $this;
    }

    /**
    * Gets fileAction
    *  **参数解释**： 文件动作 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileAction()
    {
        return $this->container['fileAction'];
    }

    /**
    * Sets fileAction
    *
    * @param string|null $fileAction **参数解释**： 文件动作 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileAction($fileAction)
    {
        $this->container['fileAction'] = $fileAction;
        return $this;
    }

    /**
    * Gets fileChangeAttr
    *  **参数解释**： 变更前后的属性 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileChangeAttr()
    {
        return $this->container['fileChangeAttr'];
    }

    /**
    * Sets fileChangeAttr
    *
    * @param string|null $fileChangeAttr **参数解释**： 变更前后的属性 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileChangeAttr($fileChangeAttr)
    {
        $this->container['fileChangeAttr'] = $fileChangeAttr;
        return $this;
    }

    /**
    * Gets fileNewPath
    *  **参数解释**： 新文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileNewPath()
    {
        return $this->container['fileNewPath'];
    }

    /**
    * Sets fileNewPath
    *
    * @param string|null $fileNewPath **参数解释**： 新文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileNewPath($fileNewPath)
    {
        $this->container['fileNewPath'] = $fileNewPath;
        return $this;
    }

    /**
    * Gets fileDesc
    *  **参数解释**： 文件描述 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileDesc()
    {
        return $this->container['fileDesc'];
    }

    /**
    * Sets fileDesc
    *
    * @param string|null $fileDesc **参数解释**： 文件描述 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileDesc($fileDesc)
    {
        $this->container['fileDesc'] = $fileDesc;
        return $this;
    }

    /**
    * Gets fileKeyWord
    *  **参数解释**： 文件关键字 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileKeyWord()
    {
        return $this->container['fileKeyWord'];
    }

    /**
    * Sets fileKeyWord
    *
    * @param string|null $fileKeyWord **参数解释**： 文件关键字 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileKeyWord($fileKeyWord)
    {
        $this->container['fileKeyWord'] = $fileKeyWord;
        return $this;
    }

    /**
    * Gets isDir
    *  **参数解释**： 是否目录 **取值范围**： - true：是目录 - false：不是目录
    *
    * @return bool|null
    */
    public function getIsDir()
    {
        return $this->container['isDir'];
    }

    /**
    * Sets isDir
    *
    * @param bool|null $isDir **参数解释**： 是否目录 **取值范围**： - true：是目录 - false：不是目录
    *
    * @return $this
    */
    public function setIsDir($isDir)
    {
        $this->container['isDir'] = $isDir;
        return $this;
    }

    /**
    * Gets fdInfo
    *  **参数解释**： 文件句柄信息 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFdInfo()
    {
        return $this->container['fdInfo'];
    }

    /**
    * Sets fdInfo
    *
    * @param string|null $fdInfo **参数解释**： 文件句柄信息 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFdInfo($fdInfo)
    {
        $this->container['fdInfo'] = $fdInfo;
        return $this;
    }

    /**
    * Gets fdCount
    *  **参数解释**： 文件句柄数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getFdCount()
    {
        return $this->container['fdCount'];
    }

    /**
    * Sets fdCount
    *
    * @param int|null $fdCount **参数解释**： 文件句柄数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setFdCount($fdCount)
    {
        $this->container['fdCount'] = $fdCount;
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

