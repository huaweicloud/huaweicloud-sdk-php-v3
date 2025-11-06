<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DevstarRepoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DevstarRepoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  仓库的uuid
    * repoId  仓库ID
    * repoName  仓库名称
    * sshUrl  仓库SSH地址
    * codeUrl  仓库HTTPS地址
    * detailUrl  仓库预览地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'repoId' => 'string',
            'repoName' => 'string',
            'sshUrl' => 'string',
            'codeUrl' => 'string',
            'detailUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  仓库的uuid
    * repoId  仓库ID
    * repoName  仓库名称
    * sshUrl  仓库SSH地址
    * codeUrl  仓库HTTPS地址
    * detailUrl  仓库预览地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'repoId' => null,
        'repoName' => null,
        'sshUrl' => null,
        'codeUrl' => null,
        'detailUrl' => null
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
    * uuid  仓库的uuid
    * repoId  仓库ID
    * repoName  仓库名称
    * sshUrl  仓库SSH地址
    * codeUrl  仓库HTTPS地址
    * detailUrl  仓库预览地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'repoId' => 'repo_id',
            'repoName' => 'repo_name',
            'sshUrl' => 'ssh_url',
            'codeUrl' => 'code_url',
            'detailUrl' => 'detail_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  仓库的uuid
    * repoId  仓库ID
    * repoName  仓库名称
    * sshUrl  仓库SSH地址
    * codeUrl  仓库HTTPS地址
    * detailUrl  仓库预览地址
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'repoId' => 'setRepoId',
            'repoName' => 'setRepoName',
            'sshUrl' => 'setSshUrl',
            'codeUrl' => 'setCodeUrl',
            'detailUrl' => 'setDetailUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  仓库的uuid
    * repoId  仓库ID
    * repoName  仓库名称
    * sshUrl  仓库SSH地址
    * codeUrl  仓库HTTPS地址
    * detailUrl  仓库预览地址
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'repoId' => 'getRepoId',
            'repoName' => 'getRepoName',
            'sshUrl' => 'getSshUrl',
            'codeUrl' => 'getCodeUrl',
            'detailUrl' => 'getDetailUrl'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['sshUrl'] = isset($data['sshUrl']) ? $data['sshUrl'] : null;
        $this->container['codeUrl'] = isset($data['codeUrl']) ? $data['codeUrl'] : null;
        $this->container['detailUrl'] = isset($data['detailUrl']) ? $data['detailUrl'] : null;
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
    * Gets uuid
    *  仓库的uuid
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 仓库的uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets repoId
    *  仓库ID
    *
    * @return string|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param string|null $repoId 仓库ID
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets repoName
    *  仓库名称
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
    * @param string|null $repoName 仓库名称
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets sshUrl
    *  仓库SSH地址
    *
    * @return string|null
    */
    public function getSshUrl()
    {
        return $this->container['sshUrl'];
    }

    /**
    * Sets sshUrl
    *
    * @param string|null $sshUrl 仓库SSH地址
    *
    * @return $this
    */
    public function setSshUrl($sshUrl)
    {
        $this->container['sshUrl'] = $sshUrl;
        return $this;
    }

    /**
    * Gets codeUrl
    *  仓库HTTPS地址
    *
    * @return string|null
    */
    public function getCodeUrl()
    {
        return $this->container['codeUrl'];
    }

    /**
    * Sets codeUrl
    *
    * @param string|null $codeUrl 仓库HTTPS地址
    *
    * @return $this
    */
    public function setCodeUrl($codeUrl)
    {
        $this->container['codeUrl'] = $codeUrl;
        return $this;
    }

    /**
    * Gets detailUrl
    *  仓库预览地址
    *
    * @return string|null
    */
    public function getDetailUrl()
    {
        return $this->container['detailUrl'];
    }

    /**
    * Sets detailUrl
    *
    * @param string|null $detailUrl 仓库预览地址
    *
    * @return $this
    */
    public function setDetailUrl($detailUrl)
    {
        $this->container['detailUrl'] = $detailUrl;
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

