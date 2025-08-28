<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageUploadCommandResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageUploadCommandResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageCommand  **参数解释**： 上传镜像指令 **取值范围**： 字符长度1-1024位
    * imagesDownloadUrl  **参数解释**： 镜像下载链接 **取值范围**： 字符长度1-256位
    * swrImagePullCommand  **参数解释**： SWR镜像获取指令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageCommand' => 'string',
            'imagesDownloadUrl' => 'string',
            'swrImagePullCommand' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageCommand  **参数解释**： 上传镜像指令 **取值范围**： 字符长度1-1024位
    * imagesDownloadUrl  **参数解释**： 镜像下载链接 **取值范围**： 字符长度1-256位
    * swrImagePullCommand  **参数解释**： SWR镜像获取指令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageCommand' => null,
        'imagesDownloadUrl' => null,
        'swrImagePullCommand' => null
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
    * imageCommand  **参数解释**： 上传镜像指令 **取值范围**： 字符长度1-1024位
    * imagesDownloadUrl  **参数解释**： 镜像下载链接 **取值范围**： 字符长度1-256位
    * swrImagePullCommand  **参数解释**： SWR镜像获取指令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageCommand' => 'image_command',
            'imagesDownloadUrl' => 'images_download_url',
            'swrImagePullCommand' => 'swr_image_pull_command'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageCommand  **参数解释**： 上传镜像指令 **取值范围**： 字符长度1-1024位
    * imagesDownloadUrl  **参数解释**： 镜像下载链接 **取值范围**： 字符长度1-256位
    * swrImagePullCommand  **参数解释**： SWR镜像获取指令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $setters = [
            'imageCommand' => 'setImageCommand',
            'imagesDownloadUrl' => 'setImagesDownloadUrl',
            'swrImagePullCommand' => 'setSwrImagePullCommand'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageCommand  **参数解释**： 上传镜像指令 **取值范围**： 字符长度1-1024位
    * imagesDownloadUrl  **参数解释**： 镜像下载链接 **取值范围**： 字符长度1-256位
    * swrImagePullCommand  **参数解释**： SWR镜像获取指令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $getters = [
            'imageCommand' => 'getImageCommand',
            'imagesDownloadUrl' => 'getImagesDownloadUrl',
            'swrImagePullCommand' => 'getSwrImagePullCommand'
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
        $this->container['imageCommand'] = isset($data['imageCommand']) ? $data['imageCommand'] : null;
        $this->container['imagesDownloadUrl'] = isset($data['imagesDownloadUrl']) ? $data['imagesDownloadUrl'] : null;
        $this->container['swrImagePullCommand'] = isset($data['swrImagePullCommand']) ? $data['swrImagePullCommand'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageCommand']) && (mb_strlen($this->container['imageCommand']) > 1024)) {
                $invalidProperties[] = "invalid value for 'imageCommand', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['imageCommand']) && (mb_strlen($this->container['imageCommand']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageCommand', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imagesDownloadUrl']) && (mb_strlen($this->container['imagesDownloadUrl']) > 256)) {
                $invalidProperties[] = "invalid value for 'imagesDownloadUrl', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imagesDownloadUrl']) && (mb_strlen($this->container['imagesDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'imagesDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['swrImagePullCommand']) && (mb_strlen($this->container['swrImagePullCommand']) > 1024)) {
                $invalidProperties[] = "invalid value for 'swrImagePullCommand', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['swrImagePullCommand']) && (mb_strlen($this->container['swrImagePullCommand']) < 1)) {
                $invalidProperties[] = "invalid value for 'swrImagePullCommand', the character length must be bigger than or equal to 1.";
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
    * Gets imageCommand
    *  **参数解释**： 上传镜像指令 **取值范围**： 字符长度1-1024位
    *
    * @return string|null
    */
    public function getImageCommand()
    {
        return $this->container['imageCommand'];
    }

    /**
    * Sets imageCommand
    *
    * @param string|null $imageCommand **参数解释**： 上传镜像指令 **取值范围**： 字符长度1-1024位
    *
    * @return $this
    */
    public function setImageCommand($imageCommand)
    {
        $this->container['imageCommand'] = $imageCommand;
        return $this;
    }

    /**
    * Gets imagesDownloadUrl
    *  **参数解释**： 镜像下载链接 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getImagesDownloadUrl()
    {
        return $this->container['imagesDownloadUrl'];
    }

    /**
    * Sets imagesDownloadUrl
    *
    * @param string|null $imagesDownloadUrl **参数解释**： 镜像下载链接 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setImagesDownloadUrl($imagesDownloadUrl)
    {
        $this->container['imagesDownloadUrl'] = $imagesDownloadUrl;
        return $this;
    }

    /**
    * Gets swrImagePullCommand
    *  **参数解释**： SWR镜像获取指令 **取值范围**： 字符长度1-1024位
    *
    * @return string|null
    */
    public function getSwrImagePullCommand()
    {
        return $this->container['swrImagePullCommand'];
    }

    /**
    * Sets swrImagePullCommand
    *
    * @param string|null $swrImagePullCommand **参数解释**： SWR镜像获取指令 **取值范围**： 字符长度1-1024位
    *
    * @return $this
    */
    public function setSwrImagePullCommand($swrImagePullCommand)
    {
        $this->container['swrImagePullCommand'] = $swrImagePullCommand;
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

