<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetFileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetFileInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileId  文件ID。
    * fileName  文件名创建文件时候不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，固定24位。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 * TEMPORARY：临时文件夹（用于文件替换时上传新文件） > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    * downloadUrl  文件下载URL，有效期为24小时。
    * state  文件状态枚举: * CREATING：文件上传中 * CREATED：文件已上传（自动审核通过） * FAILED：文件上传失败 * CANCELLED：文件上传已取消 * DELETING：文件删除中 * DELETED：文件已删除 * UPLOADED：文件已上传（尚未审核） * REVIEW：人工审核（文件已上传） * BLOCK：冻结
    * reason  审核失败原因
    * fileExtraMeta  fileExtraMeta
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileId' => 'string',
            'fileName' => 'string',
            'fileMd5' => 'string',
            'fileSize' => 'int',
            'fileType' => 'string',
            'assetFileCategory' => 'string',
            'downloadUrl' => 'string',
            'state' => 'string',
            'reason' => 'string',
            'fileExtraMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\FileExtraMeta'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileId  文件ID。
    * fileName  文件名创建文件时候不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，固定24位。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 * TEMPORARY：临时文件夹（用于文件替换时上传新文件） > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    * downloadUrl  文件下载URL，有效期为24小时。
    * state  文件状态枚举: * CREATING：文件上传中 * CREATED：文件已上传（自动审核通过） * FAILED：文件上传失败 * CANCELLED：文件上传已取消 * DELETING：文件删除中 * DELETED：文件已删除 * UPLOADED：文件已上传（尚未审核） * REVIEW：人工审核（文件已上传） * BLOCK：冻结
    * reason  审核失败原因
    * fileExtraMeta  fileExtraMeta
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileId' => null,
        'fileName' => null,
        'fileMd5' => null,
        'fileSize' => 'int64',
        'fileType' => null,
        'assetFileCategory' => null,
        'downloadUrl' => null,
        'state' => null,
        'reason' => null,
        'fileExtraMeta' => null
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
    * fileId  文件ID。
    * fileName  文件名创建文件时候不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，固定24位。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 * TEMPORARY：临时文件夹（用于文件替换时上传新文件） > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    * downloadUrl  文件下载URL，有效期为24小时。
    * state  文件状态枚举: * CREATING：文件上传中 * CREATED：文件已上传（自动审核通过） * FAILED：文件上传失败 * CANCELLED：文件上传已取消 * DELETING：文件删除中 * DELETED：文件已删除 * UPLOADED：文件已上传（尚未审核） * REVIEW：人工审核（文件已上传） * BLOCK：冻结
    * reason  审核失败原因
    * fileExtraMeta  fileExtraMeta
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileId' => 'file_id',
            'fileName' => 'file_name',
            'fileMd5' => 'file_md5',
            'fileSize' => 'file_size',
            'fileType' => 'file_type',
            'assetFileCategory' => 'asset_file_category',
            'downloadUrl' => 'download_url',
            'state' => 'state',
            'reason' => 'reason',
            'fileExtraMeta' => 'file_extra_meta'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileId  文件ID。
    * fileName  文件名创建文件时候不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，固定24位。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 * TEMPORARY：临时文件夹（用于文件替换时上传新文件） > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    * downloadUrl  文件下载URL，有效期为24小时。
    * state  文件状态枚举: * CREATING：文件上传中 * CREATED：文件已上传（自动审核通过） * FAILED：文件上传失败 * CANCELLED：文件上传已取消 * DELETING：文件删除中 * DELETED：文件已删除 * UPLOADED：文件已上传（尚未审核） * REVIEW：人工审核（文件已上传） * BLOCK：冻结
    * reason  审核失败原因
    * fileExtraMeta  fileExtraMeta
    *
    * @var string[]
    */
    protected static $setters = [
            'fileId' => 'setFileId',
            'fileName' => 'setFileName',
            'fileMd5' => 'setFileMd5',
            'fileSize' => 'setFileSize',
            'fileType' => 'setFileType',
            'assetFileCategory' => 'setAssetFileCategory',
            'downloadUrl' => 'setDownloadUrl',
            'state' => 'setState',
            'reason' => 'setReason',
            'fileExtraMeta' => 'setFileExtraMeta'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileId  文件ID。
    * fileName  文件名创建文件时候不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，固定24位。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 * TEMPORARY：临时文件夹（用于文件替换时上传新文件） > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    * downloadUrl  文件下载URL，有效期为24小时。
    * state  文件状态枚举: * CREATING：文件上传中 * CREATED：文件已上传（自动审核通过） * FAILED：文件上传失败 * CANCELLED：文件上传已取消 * DELETING：文件删除中 * DELETED：文件已删除 * UPLOADED：文件已上传（尚未审核） * REVIEW：人工审核（文件已上传） * BLOCK：冻结
    * reason  审核失败原因
    * fileExtraMeta  fileExtraMeta
    *
    * @var string[]
    */
    protected static $getters = [
            'fileId' => 'getFileId',
            'fileName' => 'getFileName',
            'fileMd5' => 'getFileMd5',
            'fileSize' => 'getFileSize',
            'fileType' => 'getFileType',
            'assetFileCategory' => 'getAssetFileCategory',
            'downloadUrl' => 'getDownloadUrl',
            'state' => 'getState',
            'reason' => 'getReason',
            'fileExtraMeta' => 'getFileExtraMeta'
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
    const STATE_CREATING = 'CREATING';
    const STATE_CREATED = 'CREATED';
    const STATE_FAILED = 'FAILED';
    const STATE_CANCELLED = 'CANCELLED';
    const STATE_DELETING = 'DELETING';
    const STATE_DELETED = 'DELETED';
    const STATE_UPLOADED = 'UPLOADED';
    const STATE_REVIEW = 'REVIEW';
    const STATE_BLOCK = 'BLOCK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CREATING,
            self::STATE_CREATED,
            self::STATE_FAILED,
            self::STATE_CANCELLED,
            self::STATE_DELETING,
            self::STATE_DELETED,
            self::STATE_UPLOADED,
            self::STATE_REVIEW,
            self::STATE_BLOCK,
        ];
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
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileMd5'] = isset($data['fileMd5']) ? $data['fileMd5'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['assetFileCategory'] = isset($data['assetFileCategory']) ? $data['assetFileCategory'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['fileExtraMeta'] = isset($data['fileExtraMeta']) ? $data['fileExtraMeta'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && !preg_match("/^[A-Za-z0-9-!$'(),.+=@_~\/]{1,}[A-Za-z0-9-!$'(),.+=@_~]*$/", $this->container['fileName'])) {
                $invalidProperties[] = "invalid value for 'fileName', must be conform to the pattern /^[A-Za-z0-9-!$'(),.+=@_~\/]{1,}[A-Za-z0-9-!$'(),.+=@_~]*$/.";
            }
            if (!is_null($this->container['fileMd5']) && (mb_strlen($this->container['fileMd5']) > 24)) {
                $invalidProperties[] = "invalid value for 'fileMd5', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['fileMd5']) && (mb_strlen($this->container['fileMd5']) < 24)) {
                $invalidProperties[] = "invalid value for 'fileMd5', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] > 5368709120)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 5368709120.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetFileCategory']) && (mb_strlen($this->container['assetFileCategory']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetFileCategory', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetFileCategory']) && (mb_strlen($this->container['assetFileCategory']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetFileCategory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 256)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
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
    * Gets fileId
    *  文件ID。
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId 文件ID。
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名创建文件时候不区分大小写，最大长度256，最小长度1。
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
    * @param string|null $fileName 文件名创建文件时候不区分大小写，最大长度256，最小长度1。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileMd5
    *  文件内容MD5值，固定24位。
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
    * @param string|null $fileMd5 文件内容MD5值，固定24位。
    *
    * @return $this
    */
    public function setFileMd5($fileMd5)
    {
        $this->container['fileMd5'] = $fileMd5;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件总的大小，最小1，最大5368709120。
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
    * @param int|null $fileSize 文件总的大小，最小1，最大5368709120。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets fileType
    *  文件类型（默认提取文件后缀）。
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
    * @param string|null $fileType 文件类型（默认提取文件后缀）。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets assetFileCategory
    *  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 * TEMPORARY：临时文件夹（用于文件替换时上传新文件） > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @return string|null
    */
    public function getAssetFileCategory()
    {
        return $this->container['assetFileCategory'];
    }

    /**
    * Sets assetFileCategory
    *
    * @param string|null $assetFileCategory 文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 * TEMPORARY：临时文件夹（用于文件替换时上传新文件） > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @return $this
    */
    public function setAssetFileCategory($assetFileCategory)
    {
        $this->container['assetFileCategory'] = $assetFileCategory;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  文件下载URL，有效期为24小时。
    *
    * @return string|null
    */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
    * Sets downloadUrl
    *
    * @param string|null $downloadUrl 文件下载URL，有效期为24小时。
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
        return $this;
    }

    /**
    * Gets state
    *  文件状态枚举: * CREATING：文件上传中 * CREATED：文件已上传（自动审核通过） * FAILED：文件上传失败 * CANCELLED：文件上传已取消 * DELETING：文件删除中 * DELETED：文件已删除 * UPLOADED：文件已上传（尚未审核） * REVIEW：人工审核（文件已上传） * BLOCK：冻结
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 文件状态枚举: * CREATING：文件上传中 * CREATED：文件已上传（自动审核通过） * FAILED：文件上传失败 * CANCELLED：文件上传已取消 * DELETING：文件删除中 * DELETED：文件已删除 * UPLOADED：文件已上传（尚未审核） * REVIEW：人工审核（文件已上传） * BLOCK：冻结
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets reason
    *  审核失败原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 审核失败原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets fileExtraMeta
    *  fileExtraMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\FileExtraMeta|null
    */
    public function getFileExtraMeta()
    {
        return $this->container['fileExtraMeta'];
    }

    /**
    * Sets fileExtraMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\FileExtraMeta|null $fileExtraMeta fileExtraMeta
    *
    * @return $this
    */
    public function setFileExtraMeta($fileExtraMeta)
    {
        $this->container['fileExtraMeta'] = $fileExtraMeta;
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

