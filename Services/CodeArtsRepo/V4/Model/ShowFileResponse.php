<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  文件名称
    * path  文件路径
    * size  文件大小
    * encoding  文件编码方式
    * ref  分支名称、tag名称或者commitid
    * blobId  文件标识
    * fileType  文件类型
    * commit  commit
    * content  文件内容
    * isLimited  **参数解释：** 文件是否受限。 **取值范围：** - false, 不受限。 - true, 受限。
    * contentSha256  sha256值
    * lastCommitId  最新提交commitid
    * nickName  用户昵称
    * tenantName  租户名称
    * userName  用户名称
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'path' => 'string',
            'size' => 'int',
            'encoding' => 'string',
            'ref' => 'string',
            'blobId' => 'string',
            'fileType' => 'string',
            'commit' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryCommitDto',
            'content' => 'string',
            'isLimited' => 'bool',
            'contentSha256' => 'string',
            'lastCommitId' => 'string',
            'nickName' => 'string',
            'tenantName' => 'string',
            'userName' => 'string',
            'xTotal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  文件名称
    * path  文件路径
    * size  文件大小
    * encoding  文件编码方式
    * ref  分支名称、tag名称或者commitid
    * blobId  文件标识
    * fileType  文件类型
    * commit  commit
    * content  文件内容
    * isLimited  **参数解释：** 文件是否受限。 **取值范围：** - false, 不受限。 - true, 受限。
    * contentSha256  sha256值
    * lastCommitId  最新提交commitid
    * nickName  用户昵称
    * tenantName  租户名称
    * userName  用户名称
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'path' => null,
        'size' => 'int64',
        'encoding' => null,
        'ref' => null,
        'blobId' => null,
        'fileType' => null,
        'commit' => null,
        'content' => null,
        'isLimited' => null,
        'contentSha256' => null,
        'lastCommitId' => null,
        'nickName' => null,
        'tenantName' => null,
        'userName' => null,
        'xTotal' => null
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
    * name  文件名称
    * path  文件路径
    * size  文件大小
    * encoding  文件编码方式
    * ref  分支名称、tag名称或者commitid
    * blobId  文件标识
    * fileType  文件类型
    * commit  commit
    * content  文件内容
    * isLimited  **参数解释：** 文件是否受限。 **取值范围：** - false, 不受限。 - true, 受限。
    * contentSha256  sha256值
    * lastCommitId  最新提交commitid
    * nickName  用户昵称
    * tenantName  租户名称
    * userName  用户名称
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'path' => 'path',
            'size' => 'size',
            'encoding' => 'encoding',
            'ref' => 'ref',
            'blobId' => 'blob_id',
            'fileType' => 'file_type',
            'commit' => 'commit',
            'content' => 'content',
            'isLimited' => 'is_limited',
            'contentSha256' => 'content_sha256',
            'lastCommitId' => 'last_commit_id',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name',
            'userName' => 'user_name',
            'xTotal' => 'X-Total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  文件名称
    * path  文件路径
    * size  文件大小
    * encoding  文件编码方式
    * ref  分支名称、tag名称或者commitid
    * blobId  文件标识
    * fileType  文件类型
    * commit  commit
    * content  文件内容
    * isLimited  **参数解释：** 文件是否受限。 **取值范围：** - false, 不受限。 - true, 受限。
    * contentSha256  sha256值
    * lastCommitId  最新提交commitid
    * nickName  用户昵称
    * tenantName  租户名称
    * userName  用户名称
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'path' => 'setPath',
            'size' => 'setSize',
            'encoding' => 'setEncoding',
            'ref' => 'setRef',
            'blobId' => 'setBlobId',
            'fileType' => 'setFileType',
            'commit' => 'setCommit',
            'content' => 'setContent',
            'isLimited' => 'setIsLimited',
            'contentSha256' => 'setContentSha256',
            'lastCommitId' => 'setLastCommitId',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName',
            'userName' => 'setUserName',
            'xTotal' => 'setXTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  文件名称
    * path  文件路径
    * size  文件大小
    * encoding  文件编码方式
    * ref  分支名称、tag名称或者commitid
    * blobId  文件标识
    * fileType  文件类型
    * commit  commit
    * content  文件内容
    * isLimited  **参数解释：** 文件是否受限。 **取值范围：** - false, 不受限。 - true, 受限。
    * contentSha256  sha256值
    * lastCommitId  最新提交commitid
    * nickName  用户昵称
    * tenantName  租户名称
    * userName  用户名称
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'path' => 'getPath',
            'size' => 'getSize',
            'encoding' => 'getEncoding',
            'ref' => 'getRef',
            'blobId' => 'getBlobId',
            'fileType' => 'getFileType',
            'commit' => 'getCommit',
            'content' => 'getContent',
            'isLimited' => 'getIsLimited',
            'contentSha256' => 'getContentSha256',
            'lastCommitId' => 'getLastCommitId',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName',
            'userName' => 'getUserName',
            'xTotal' => 'getXTotal'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['blobId'] = isset($data['blobId']) ? $data['blobId'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['isLimited'] = isset($data['isLimited']) ? $data['isLimited'] : null;
        $this->container['contentSha256'] = isset($data['contentSha256']) ? $data['contentSha256'] : null;
        $this->container['lastCommitId'] = isset($data['lastCommitId']) ? $data['lastCommitId'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['xTotal'] = isset($data['xTotal']) ? $data['xTotal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 10000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 10000)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 9007199254740992)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9007199254740992.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ref']) && (mb_strlen($this->container['ref']) > 10000)) {
                $invalidProperties[] = "invalid value for 'ref', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['ref']) && (mb_strlen($this->container['ref']) < 1)) {
                $invalidProperties[] = "invalid value for 'ref', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastCommitId']) && (mb_strlen($this->container['lastCommitId']) > 40)) {
                $invalidProperties[] = "invalid value for 'lastCommitId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['lastCommitId']) && (mb_strlen($this->container['lastCommitId']) < 40)) {
                $invalidProperties[] = "invalid value for 'lastCommitId', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  文件名称
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
    * @param string|null $name 文件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets path
    *  文件路径
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
    * @param string|null $path 文件路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets size
    *  文件大小
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
    * @param int|null $size 文件大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets encoding
    *  文件编码方式
    *
    * @return string|null
    */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
    * Sets encoding
    *
    * @param string|null $encoding 文件编码方式
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
    * Gets ref
    *  分支名称、tag名称或者commitid
    *
    * @return string|null
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string|null $ref 分支名称、tag名称或者commitid
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
        return $this;
    }

    /**
    * Gets blobId
    *  文件标识
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
    * @param string|null $blobId 文件标识
    *
    * @return $this
    */
    public function setBlobId($blobId)
    {
        $this->container['blobId'] = $blobId;
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
    * Gets commit
    *  commit
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryCommitDto|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryCommitDto|null $commit commit
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets content
    *  文件内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 文件内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets isLimited
    *  **参数解释：** 文件是否受限。 **取值范围：** - false, 不受限。 - true, 受限。
    *
    * @return bool|null
    */
    public function getIsLimited()
    {
        return $this->container['isLimited'];
    }

    /**
    * Sets isLimited
    *
    * @param bool|null $isLimited **参数解释：** 文件是否受限。 **取值范围：** - false, 不受限。 - true, 受限。
    *
    * @return $this
    */
    public function setIsLimited($isLimited)
    {
        $this->container['isLimited'] = $isLimited;
        return $this;
    }

    /**
    * Gets contentSha256
    *  sha256值
    *
    * @return string|null
    */
    public function getContentSha256()
    {
        return $this->container['contentSha256'];
    }

    /**
    * Sets contentSha256
    *
    * @param string|null $contentSha256 sha256值
    *
    * @return $this
    */
    public function setContentSha256($contentSha256)
    {
        $this->container['contentSha256'] = $contentSha256;
        return $this;
    }

    /**
    * Gets lastCommitId
    *  最新提交commitid
    *
    * @return string|null
    */
    public function getLastCommitId()
    {
        return $this->container['lastCommitId'];
    }

    /**
    * Sets lastCommitId
    *
    * @param string|null $lastCommitId 最新提交commitid
    *
    * @return $this
    */
    public function setLastCommitId($lastCommitId)
    {
        $this->container['lastCommitId'] = $lastCommitId;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  租户名称
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName 租户名称
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets xTotal
    *  xTotal
    *
    * @return string|null
    */
    public function getXTotal()
    {
        return $this->container['xTotal'];
    }

    /**
    * Sets xTotal
    *
    * @param string|null $xTotal xTotal
    *
    * @return $this
    */
    public function setXTotal($xTotal)
    {
        $this->container['xTotal'] = $xTotal;
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

