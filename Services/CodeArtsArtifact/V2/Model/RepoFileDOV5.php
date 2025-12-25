<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoFileDOV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoFileDOV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * fileId  **参数解释**: 文件id。 **取值范围**: 不涉及。
    * repoName  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * projectName  **参数解释**: 项目名称。 **取值范围**: 不涉及。
    * parentId  **参数解释**: 父级目录ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * type  **参数解释**: 文件类型, folder代表是目录,file代表文件。 **取值范围**: 不涉及。
    * category  **参数解释**: 发布包状态 test为测试包 prod为发布包。 **取值范围**: 不涉及。
    * extension  **参数解释**: 文件扩展名。 **取值范围**: 不涉及。
    * path  **参数解释**: 文件路径。 **取值范围**: 不涉及。
    * fullPath  **参数解释**: 文件路径(含项目)。 **取值范围**: 不涉及。
    * size  **参数解释**: 文件大小,单位为byte。 **取值范围**: 不涉及。
    * md5  **参数解释**: md5校验和。 **取值范围**: 不涉及。
    * sha256  **参数解释**: sha256校验和。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 下载地址。 **取值范围**: 不涉及。
    * downloadUrlWithId  **参数解释**: 带有id的下载地址。 **取值范围**: 不涉及。
    * webUrl  **参数解释**: 历史版本遗留字段，请忽略。 **取值范围**: 不涉及。
    * versionEnable  **参数解释**: 判断当前文件或文件夹父目录是否为版本路径，即仓库下第一层子目录。 **取值范围**: - true：父目录是版本路径。 - false：父目录不是版本路径。
    * migratedState  **参数解释**: migrated_state。 **取值范围**: 该参数为内部数据改造参数，无业务含义，请忽略。
    * uploadId  **参数解释**: 该参数无返回值，请忽略。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'fileId' => 'string',
            'repoName' => 'string',
            'projectName' => 'string',
            'parentId' => 'string',
            'name' => 'string',
            'fileName' => 'string',
            'type' => 'string',
            'category' => 'string',
            'extension' => 'string',
            'path' => 'string',
            'fullPath' => 'string',
            'size' => 'int',
            'md5' => 'string',
            'sha256' => 'string',
            'downloadUrl' => 'string',
            'downloadUrlWithId' => 'string',
            'webUrl' => 'string',
            'versionEnable' => 'bool',
            'migratedState' => 'int',
            'uploadId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * fileId  **参数解释**: 文件id。 **取值范围**: 不涉及。
    * repoName  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * projectName  **参数解释**: 项目名称。 **取值范围**: 不涉及。
    * parentId  **参数解释**: 父级目录ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * type  **参数解释**: 文件类型, folder代表是目录,file代表文件。 **取值范围**: 不涉及。
    * category  **参数解释**: 发布包状态 test为测试包 prod为发布包。 **取值范围**: 不涉及。
    * extension  **参数解释**: 文件扩展名。 **取值范围**: 不涉及。
    * path  **参数解释**: 文件路径。 **取值范围**: 不涉及。
    * fullPath  **参数解释**: 文件路径(含项目)。 **取值范围**: 不涉及。
    * size  **参数解释**: 文件大小,单位为byte。 **取值范围**: 不涉及。
    * md5  **参数解释**: md5校验和。 **取值范围**: 不涉及。
    * sha256  **参数解释**: sha256校验和。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 下载地址。 **取值范围**: 不涉及。
    * downloadUrlWithId  **参数解释**: 带有id的下载地址。 **取值范围**: 不涉及。
    * webUrl  **参数解释**: 历史版本遗留字段，请忽略。 **取值范围**: 不涉及。
    * versionEnable  **参数解释**: 判断当前文件或文件夹父目录是否为版本路径，即仓库下第一层子目录。 **取值范围**: - true：父目录是版本路径。 - false：父目录不是版本路径。
    * migratedState  **参数解释**: migrated_state。 **取值范围**: 该参数为内部数据改造参数，无业务含义，请忽略。
    * uploadId  **参数解释**: 该参数无返回值，请忽略。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'fileId' => null,
        'repoName' => null,
        'projectName' => null,
        'parentId' => null,
        'name' => null,
        'fileName' => null,
        'type' => null,
        'category' => null,
        'extension' => null,
        'path' => null,
        'fullPath' => null,
        'size' => 'int64',
        'md5' => null,
        'sha256' => null,
        'downloadUrl' => null,
        'downloadUrlWithId' => null,
        'webUrl' => null,
        'versionEnable' => null,
        'migratedState' => 'int32',
        'uploadId' => null
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
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * fileId  **参数解释**: 文件id。 **取值范围**: 不涉及。
    * repoName  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * projectName  **参数解释**: 项目名称。 **取值范围**: 不涉及。
    * parentId  **参数解释**: 父级目录ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * type  **参数解释**: 文件类型, folder代表是目录,file代表文件。 **取值范围**: 不涉及。
    * category  **参数解释**: 发布包状态 test为测试包 prod为发布包。 **取值范围**: 不涉及。
    * extension  **参数解释**: 文件扩展名。 **取值范围**: 不涉及。
    * path  **参数解释**: 文件路径。 **取值范围**: 不涉及。
    * fullPath  **参数解释**: 文件路径(含项目)。 **取值范围**: 不涉及。
    * size  **参数解释**: 文件大小,单位为byte。 **取值范围**: 不涉及。
    * md5  **参数解释**: md5校验和。 **取值范围**: 不涉及。
    * sha256  **参数解释**: sha256校验和。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 下载地址。 **取值范围**: 不涉及。
    * downloadUrlWithId  **参数解释**: 带有id的下载地址。 **取值范围**: 不涉及。
    * webUrl  **参数解释**: 历史版本遗留字段，请忽略。 **取值范围**: 不涉及。
    * versionEnable  **参数解释**: 判断当前文件或文件夹父目录是否为版本路径，即仓库下第一层子目录。 **取值范围**: - true：父目录是版本路径。 - false：父目录不是版本路径。
    * migratedState  **参数解释**: migrated_state。 **取值范围**: 该参数为内部数据改造参数，无业务含义，请忽略。
    * uploadId  **参数解释**: 该参数无返回值，请忽略。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fileId' => 'file_id',
            'repoName' => 'repo_name',
            'projectName' => 'project_name',
            'parentId' => 'parent_id',
            'name' => 'name',
            'fileName' => 'file_name',
            'type' => 'type',
            'category' => 'category',
            'extension' => 'extension',
            'path' => 'path',
            'fullPath' => 'full_path',
            'size' => 'size',
            'md5' => 'md5',
            'sha256' => 'sha256',
            'downloadUrl' => 'download_url',
            'downloadUrlWithId' => 'download_url_with_id',
            'webUrl' => 'web_url',
            'versionEnable' => 'version_enable',
            'migratedState' => 'migrated_state',
            'uploadId' => 'upload_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * fileId  **参数解释**: 文件id。 **取值范围**: 不涉及。
    * repoName  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * projectName  **参数解释**: 项目名称。 **取值范围**: 不涉及。
    * parentId  **参数解释**: 父级目录ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * type  **参数解释**: 文件类型, folder代表是目录,file代表文件。 **取值范围**: 不涉及。
    * category  **参数解释**: 发布包状态 test为测试包 prod为发布包。 **取值范围**: 不涉及。
    * extension  **参数解释**: 文件扩展名。 **取值范围**: 不涉及。
    * path  **参数解释**: 文件路径。 **取值范围**: 不涉及。
    * fullPath  **参数解释**: 文件路径(含项目)。 **取值范围**: 不涉及。
    * size  **参数解释**: 文件大小,单位为byte。 **取值范围**: 不涉及。
    * md5  **参数解释**: md5校验和。 **取值范围**: 不涉及。
    * sha256  **参数解释**: sha256校验和。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 下载地址。 **取值范围**: 不涉及。
    * downloadUrlWithId  **参数解释**: 带有id的下载地址。 **取值范围**: 不涉及。
    * webUrl  **参数解释**: 历史版本遗留字段，请忽略。 **取值范围**: 不涉及。
    * versionEnable  **参数解释**: 判断当前文件或文件夹父目录是否为版本路径，即仓库下第一层子目录。 **取值范围**: - true：父目录是版本路径。 - false：父目录不是版本路径。
    * migratedState  **参数解释**: migrated_state。 **取值范围**: 该参数为内部数据改造参数，无业务含义，请忽略。
    * uploadId  **参数解释**: 该参数无返回值，请忽略。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fileId' => 'setFileId',
            'repoName' => 'setRepoName',
            'projectName' => 'setProjectName',
            'parentId' => 'setParentId',
            'name' => 'setName',
            'fileName' => 'setFileName',
            'type' => 'setType',
            'category' => 'setCategory',
            'extension' => 'setExtension',
            'path' => 'setPath',
            'fullPath' => 'setFullPath',
            'size' => 'setSize',
            'md5' => 'setMd5',
            'sha256' => 'setSha256',
            'downloadUrl' => 'setDownloadUrl',
            'downloadUrlWithId' => 'setDownloadUrlWithId',
            'webUrl' => 'setWebUrl',
            'versionEnable' => 'setVersionEnable',
            'migratedState' => 'setMigratedState',
            'uploadId' => 'setUploadId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: id。 **取值范围**: 不涉及。
    * fileId  **参数解释**: 文件id。 **取值范围**: 不涉及。
    * repoName  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * projectName  **参数解释**: 项目名称。 **取值范围**: 不涉及。
    * parentId  **参数解释**: 父级目录ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * type  **参数解释**: 文件类型, folder代表是目录,file代表文件。 **取值范围**: 不涉及。
    * category  **参数解释**: 发布包状态 test为测试包 prod为发布包。 **取值范围**: 不涉及。
    * extension  **参数解释**: 文件扩展名。 **取值范围**: 不涉及。
    * path  **参数解释**: 文件路径。 **取值范围**: 不涉及。
    * fullPath  **参数解释**: 文件路径(含项目)。 **取值范围**: 不涉及。
    * size  **参数解释**: 文件大小,单位为byte。 **取值范围**: 不涉及。
    * md5  **参数解释**: md5校验和。 **取值范围**: 不涉及。
    * sha256  **参数解释**: sha256校验和。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 下载地址。 **取值范围**: 不涉及。
    * downloadUrlWithId  **参数解释**: 带有id的下载地址。 **取值范围**: 不涉及。
    * webUrl  **参数解释**: 历史版本遗留字段，请忽略。 **取值范围**: 不涉及。
    * versionEnable  **参数解释**: 判断当前文件或文件夹父目录是否为版本路径，即仓库下第一层子目录。 **取值范围**: - true：父目录是版本路径。 - false：父目录不是版本路径。
    * migratedState  **参数解释**: migrated_state。 **取值范围**: 该参数为内部数据改造参数，无业务含义，请忽略。
    * uploadId  **参数解释**: 该参数无返回值，请忽略。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fileId' => 'getFileId',
            'repoName' => 'getRepoName',
            'projectName' => 'getProjectName',
            'parentId' => 'getParentId',
            'name' => 'getName',
            'fileName' => 'getFileName',
            'type' => 'getType',
            'category' => 'getCategory',
            'extension' => 'getExtension',
            'path' => 'getPath',
            'fullPath' => 'getFullPath',
            'size' => 'getSize',
            'md5' => 'getMd5',
            'sha256' => 'getSha256',
            'downloadUrl' => 'getDownloadUrl',
            'downloadUrlWithId' => 'getDownloadUrlWithId',
            'webUrl' => 'getWebUrl',
            'versionEnable' => 'getVersionEnable',
            'migratedState' => 'getMigratedState',
            'uploadId' => 'getUploadId'
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
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['fullPath'] = isset($data['fullPath']) ? $data['fullPath'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
        $this->container['sha256'] = isset($data['sha256']) ? $data['sha256'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['downloadUrlWithId'] = isset($data['downloadUrlWithId']) ? $data['downloadUrlWithId'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['versionEnable'] = isset($data['versionEnable']) ? $data['versionEnable'] : null;
        $this->container['migratedState'] = isset($data['migratedState']) ? $data['migratedState'] : null;
        $this->container['uploadId'] = isset($data['uploadId']) ? $data['uploadId'] : null;
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
    *  **参数解释**: id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**: id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fileId
    *  **参数解释**: 文件id。 **取值范围**: 不涉及。
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
    * @param string|null $fileId **参数解释**: 文件id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets repoName
    *  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string|null $repoName **参数解释**: 仓库id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释**: 项目名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释**: 项目名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释**: 父级目录ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId **参数解释**: 父级目录ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 文件名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**: 文件名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets fileName
    *  **参数解释**: 文件名。 **取值范围**: 不涉及。
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
    * @param string|null $fileName **参数解释**: 文件名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 文件类型, folder代表是目录,file代表文件。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**: 文件类型, folder代表是目录,file代表文件。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**: 发布包状态 test为测试包 prod为发布包。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**: 发布包状态 test为测试包 prod为发布包。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets extension
    *  **参数解释**: 文件扩展名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
    * Sets extension
    *
    * @param string|null $extension **参数解释**: 文件扩展名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 文件路径。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: 文件路径。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets fullPath
    *  **参数解释**: 文件路径(含项目)。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getFullPath()
    {
        return $this->container['fullPath'];
    }

    /**
    * Sets fullPath
    *
    * @param string|null $fullPath **参数解释**: 文件路径(含项目)。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFullPath($fullPath)
    {
        $this->container['fullPath'] = $fullPath;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**: 文件大小,单位为byte。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**: 文件大小,单位为byte。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets md5
    *  **参数解释**: md5校验和。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string|null $md5 **参数解释**: md5校验和。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
        return $this;
    }

    /**
    * Gets sha256
    *  **参数解释**: sha256校验和。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
    * Sets sha256
    *
    * @param string|null $sha256 **参数解释**: sha256校验和。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSha256($sha256)
    {
        $this->container['sha256'] = $sha256;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  **参数解释**: 下载地址。 **取值范围**: 不涉及。
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
    * @param string|null $downloadUrl **参数解释**: 下载地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
        return $this;
    }

    /**
    * Gets downloadUrlWithId
    *  **参数解释**: 带有id的下载地址。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDownloadUrlWithId()
    {
        return $this->container['downloadUrlWithId'];
    }

    /**
    * Sets downloadUrlWithId
    *
    * @param string|null $downloadUrlWithId **参数解释**: 带有id的下载地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDownloadUrlWithId($downloadUrlWithId)
    {
        $this->container['downloadUrlWithId'] = $downloadUrlWithId;
        return $this;
    }

    /**
    * Gets webUrl
    *  **参数解释**: 历史版本遗留字段，请忽略。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl **参数解释**: 历史版本遗留字段，请忽略。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets versionEnable
    *  **参数解释**: 判断当前文件或文件夹父目录是否为版本路径，即仓库下第一层子目录。 **取值范围**: - true：父目录是版本路径。 - false：父目录不是版本路径。
    *
    * @return bool|null
    */
    public function getVersionEnable()
    {
        return $this->container['versionEnable'];
    }

    /**
    * Sets versionEnable
    *
    * @param bool|null $versionEnable **参数解释**: 判断当前文件或文件夹父目录是否为版本路径，即仓库下第一层子目录。 **取值范围**: - true：父目录是版本路径。 - false：父目录不是版本路径。
    *
    * @return $this
    */
    public function setVersionEnable($versionEnable)
    {
        $this->container['versionEnable'] = $versionEnable;
        return $this;
    }

    /**
    * Gets migratedState
    *  **参数解释**: migrated_state。 **取值范围**: 该参数为内部数据改造参数，无业务含义，请忽略。
    *
    * @return int|null
    */
    public function getMigratedState()
    {
        return $this->container['migratedState'];
    }

    /**
    * Sets migratedState
    *
    * @param int|null $migratedState **参数解释**: migrated_state。 **取值范围**: 该参数为内部数据改造参数，无业务含义，请忽略。
    *
    * @return $this
    */
    public function setMigratedState($migratedState)
    {
        $this->container['migratedState'] = $migratedState;
        return $this;
    }

    /**
    * Gets uploadId
    *  **参数解释**: 该参数无返回值，请忽略。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUploadId()
    {
        return $this->container['uploadId'];
    }

    /**
    * Sets uploadId
    *
    * @param string|null $uploadId **参数解释**: 该参数无返回值，请忽略。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUploadId($uploadId)
    {
        $this->container['uploadId'] = $uploadId;
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

